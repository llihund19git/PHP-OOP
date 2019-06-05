<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc51abbd75dfd7d7421a0238105bfe66
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc51abbd75dfd7d7421a0238105bfe66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc51abbd75dfd7d7421a0238105bfe66::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}