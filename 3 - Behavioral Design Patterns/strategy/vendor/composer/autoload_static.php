<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5acac2a9f71bca1d834011eb320c0c9c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StrategyPattern\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StrategyPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5acac2a9f71bca1d834011eb320c0c9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5acac2a9f71bca1d834011eb320c0c9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5acac2a9f71bca1d834011eb320c0c9c::$classMap;

        }, null, ClassLoader::class);
    }
}
