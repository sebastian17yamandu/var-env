<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit614fe2cbc48931ce7ee418f96c8f7abc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sebastian17Yamandu\\VarEnv\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sebastian17Yamandu\\VarEnv\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit614fe2cbc48931ce7ee418f96c8f7abc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit614fe2cbc48931ce7ee418f96c8f7abc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit614fe2cbc48931ce7ee418f96c8f7abc::$classMap;

        }, null, ClassLoader::class);
    }
}
