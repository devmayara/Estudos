<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc59a75ddb79ca5c3a964459764387ea6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mayara\\DigitalCep\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mayara\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc59a75ddb79ca5c3a964459764387ea6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc59a75ddb79ca5c3a964459764387ea6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc59a75ddb79ca5c3a964459764387ea6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc59a75ddb79ca5c3a964459764387ea6::$classMap;

        }, null, ClassLoader::class);
    }
}
