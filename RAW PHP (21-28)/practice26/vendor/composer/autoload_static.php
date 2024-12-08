<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaffe4d6a00370276f1fab7f695ffcfa9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaffe4d6a00370276f1fab7f695ffcfa9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaffe4d6a00370276f1fab7f695ffcfa9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaffe4d6a00370276f1fab7f695ffcfa9::$classMap;

        }, null, ClassLoader::class);
    }
}
