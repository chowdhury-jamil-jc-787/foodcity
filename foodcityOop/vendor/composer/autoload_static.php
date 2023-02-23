<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit038d1d0fbb8966e5a4e1ba46ca8d03fb
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FoodcityOop\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FoodcityOop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit038d1d0fbb8966e5a4e1ba46ca8d03fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit038d1d0fbb8966e5a4e1ba46ca8d03fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit038d1d0fbb8966e5a4e1ba46ca8d03fb::$classMap;

        }, null, ClassLoader::class);
    }
}
