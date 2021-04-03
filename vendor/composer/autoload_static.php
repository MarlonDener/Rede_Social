<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita660c46eea1c4487359e093c73974701
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita660c46eea1c4487359e093c73974701::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita660c46eea1c4487359e093c73974701::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita660c46eea1c4487359e093c73974701::$classMap;

        }, null, ClassLoader::class);
    }
}