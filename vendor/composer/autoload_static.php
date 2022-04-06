<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf549dd774e3aff5cd69ee90c71893fc4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf549dd774e3aff5cd69ee90c71893fc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf549dd774e3aff5cd69ee90c71893fc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf549dd774e3aff5cd69ee90c71893fc4::$classMap;

        }, null, ClassLoader::class);
    }
}