<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb966cace1947afad2882d036b0bed2e1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wead\\DigitalCep\\' => 16,
        ),
        'M' => 
        array (
            'Mayara\\ProjetoQualquer\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wead\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/..' . '/wead/digital-cep/src',
        ),
        'Mayara\\ProjetoQualquer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/..' . '/wead/digital-cep/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb966cace1947afad2882d036b0bed2e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb966cace1947afad2882d036b0bed2e1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb966cace1947afad2882d036b0bed2e1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb966cace1947afad2882d036b0bed2e1::$classMap;

        }, null, ClassLoader::class);
    }
}
