<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9a72083fbddb05c0692c8876f34dfb6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'NamespaceProyectoA\\' => 19,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'NamespaceProyectoA\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9a72083fbddb05c0692c8876f34dfb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9a72083fbddb05c0692c8876f34dfb6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9a72083fbddb05c0692c8876f34dfb6::$classMap;

        }, null, ClassLoader::class);
    }
}