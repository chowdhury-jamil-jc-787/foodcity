<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit038d1d0fbb8966e5a4e1ba46ca8d03fb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit038d1d0fbb8966e5a4e1ba46ca8d03fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit038d1d0fbb8966e5a4e1ba46ca8d03fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit038d1d0fbb8966e5a4e1ba46ca8d03fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}