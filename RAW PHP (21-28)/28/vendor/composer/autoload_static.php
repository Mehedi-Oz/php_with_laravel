<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33dd0f4d2b88d4bf71c6b2b2aecad2b7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33dd0f4d2b88d4bf71c6b2b2aecad2b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33dd0f4d2b88d4bf71c6b2b2aecad2b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33dd0f4d2b88d4bf71c6b2b2aecad2b7::$classMap;

        }, null, ClassLoader::class);
    }
}
