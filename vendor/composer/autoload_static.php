<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde6d6b3a841a874b1d6db284509e8359
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
            0 => __DIR__ . '/../..' . '/scripts/factura',
            1 => __DIR__ . '/../..' . '/scripts/usuario',
            2 => __DIR__ . '/../..' . '/scripts/db',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde6d6b3a841a874b1d6db284509e8359::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde6d6b3a841a874b1d6db284509e8359::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitde6d6b3a841a874b1d6db284509e8359::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitde6d6b3a841a874b1d6db284509e8359::$classMap;

        }, null, ClassLoader::class);
    }
}
