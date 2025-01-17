<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf750ae668dfd8dcb764ea677b43426f2
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf750ae668dfd8dcb764ea677b43426f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf750ae668dfd8dcb764ea677b43426f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf750ae668dfd8dcb764ea677b43426f2::$classMap;

        }, null, ClassLoader::class);
    }
}
