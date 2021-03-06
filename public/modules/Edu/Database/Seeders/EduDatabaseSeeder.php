<?php

namespace Modules\Edu\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EduDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();
    $this->call(LessonSeederTableSeeder::class);
    $this->call(SystemSeederTableSeeder::class);
    $this->call(SubscribeSeederTableSeeder::class);
    $this->call(TagSeederTableSeeder::class);
    $this->call(VideoSeederTableSeeder::class);
    $this->call(TopicSeederTableSeeder::class);
  }
}
