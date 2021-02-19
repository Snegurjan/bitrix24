<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a5b15140e3d287de2bb9acaaaa3ff1f
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a5b15140e3d287de2bb9acaaaa3ff1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a5b15140e3d287de2bb9acaaaa3ff1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a5b15140e3d287de2bb9acaaaa3ff1f::$classMap;

        }, null, ClassLoader::class);
    }
}
