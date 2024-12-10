<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1486034714e643af09ce54827121ec8e
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1486034714e643af09ce54827121ec8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1486034714e643af09ce54827121ec8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1486034714e643af09ce54827121ec8e::$classMap;

        }, null, ClassLoader::class);
    }
}
