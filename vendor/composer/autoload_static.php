<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6b8d52da2b87463e150cd6cabfc599e
{
    public static $classMap = array (
        'Banana' => __DIR__ . '/../..' . '/fruits/Banana.php',
        'ComposerAutoloaderInitb6b8d52da2b87463e150cd6cabfc599e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb6b8d52da2b87463e150cd6cabfc599e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Jasmin' => __DIR__ . '/../..' . '/flowers/Jasmin.php',
        'Mango' => __DIR__ . '/../..' . '/fruits/Mango.php',
        'Rose' => __DIR__ . '/../..' . '/flowers/Rose.php',
        'SomeClass' => __DIR__ . '/../..' . '/somefile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb6b8d52da2b87463e150cd6cabfc599e::$classMap;

        }, null, ClassLoader::class);
    }
}
