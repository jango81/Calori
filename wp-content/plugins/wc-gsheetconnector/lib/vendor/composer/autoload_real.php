<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd42c48a3bb3fbc7ab7c8464898dd4380wcgscfree
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

        spl_autoload_register(array('ComposerAutoloaderInitd42c48a3bb3fbc7ab7c8464898dd4380wcgscfree', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd42c48a3bb3fbc7ab7c8464898dd4380wcgscfree', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd42c48a3bb3fbc7ab7c8464898dd4380wcgscfree::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitd42c48a3bb3fbc7ab7c8464898dd4380wcgscfree::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequired42c48a3bb3fbc7ab7c8464898dd4380wcgscfree($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequired42c48a3bb3fbc7ab7c8464898dd4380wcgscfree($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
