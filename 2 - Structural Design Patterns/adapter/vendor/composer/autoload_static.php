<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42515843b4da900a912fd7abac9a0348
{
    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\AdapterPattern\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\AdapterPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42515843b4da900a912fd7abac9a0348::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42515843b4da900a912fd7abac9a0348::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42515843b4da900a912fd7abac9a0348::$classMap;

        }, null, ClassLoader::class);
    }
}
