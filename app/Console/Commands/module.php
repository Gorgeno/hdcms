<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

/**
 * 模块创建
 * @package App\Console\Commands
 */
class module extends Command
{
    protected $signature = 'hdcms:make {name}';
    protected $description = '创建模块';
    protected $name;
    protected $path;
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arguments = $this->arguments();
        $this->name = $arguments['name'];
        $this->path = public_path("modules/{$this->name}");
        Artisan::call('module:make ' . $this->name);
        $this->createInitFile();
        $this->info('模块创建成功');
    }

    protected function createInitFile()
    {
        if (
            !is_dir($concurrentDirectory = $this->path . '/config') && !mkdir($concurrentDirectory, 0755, true)
            && !is_dir($concurrentDirectory)
        ) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        copy(__DIR__ . '/module/config.php', $this->path . '/config/config.php');
        copy(__DIR__ . '/module/menu.php', $this->path . '/config/menu.php');
        copy(__DIR__ . '/module/preview.jpg', $this->path . '/preview.jpg');
    }
}
