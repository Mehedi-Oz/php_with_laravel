<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit262353e0b2c37f49fcbc9783c52ec2ab
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit262353e0b2c37f49fcbc9783c52ec2ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit262353e0b2c37f49fcbc9783c52ec2ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit262353e0b2c37f49fcbc9783c52ec2ab::$classMap;

        }, null, ClassLoader::class);
    }
}
