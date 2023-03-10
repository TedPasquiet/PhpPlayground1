<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbb0a5bb8d0869dc2bd7927ebcf35e9fb
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbb0a5bb8d0869dc2bd7927ebcf35e9fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb0a5bb8d0869dc2bd7927ebcf35e9fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbb0a5bb8d0869dc2bd7927ebcf35e9fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
