<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20b15d5f7bc953a69ceb0fea81f9d9d3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MartenaSoft\\WarehouseCommon\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MartenaSoft\\WarehouseCommon\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit20b15d5f7bc953a69ceb0fea81f9d9d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20b15d5f7bc953a69ceb0fea81f9d9d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20b15d5f7bc953a69ceb0fea81f9d9d3::$classMap;

        }, null, ClassLoader::class);
    }
}