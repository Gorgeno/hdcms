<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d4c87ebc33a396b7e2ced3e172a9568
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Edu\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Edu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d4c87ebc33a396b7e2ced3e172a9568::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d4c87ebc33a396b7e2ced3e172a9568::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0d4c87ebc33a396b7e2ced3e172a9568::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
