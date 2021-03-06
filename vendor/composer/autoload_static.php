<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc4ac93fd99943ed4d83d0a9f3115bf2
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc4ac93fd99943ed4d83d0a9f3115bf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc4ac93fd99943ed4d83d0a9f3115bf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc4ac93fd99943ed4d83d0a9f3115bf2::$classMap;

        }, null, ClassLoader::class);
    }
}
