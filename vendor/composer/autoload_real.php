<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit267e1b5622f17295cd1e420d9b7ca90d
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

        spl_autoload_register(array('ComposerAutoloaderInit267e1b5622f17295cd1e420d9b7ca90d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit267e1b5622f17295cd1e420d9b7ca90d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit267e1b5622f17295cd1e420d9b7ca90d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
