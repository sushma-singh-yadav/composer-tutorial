<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite67c618ad094c239f4f5e73addf5e175
{
    public static $files = array (
        'a9df79295f0e66ae9f2acf1e957dc21f' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite67c618ad094c239f4f5e73addf5e175::$classMap;

        }, null, ClassLoader::class);
    }
}
