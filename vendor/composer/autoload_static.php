<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit958b718593dbb3ec5db352db30118c82
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit958b718593dbb3ec5db352db30118c82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit958b718593dbb3ec5db352db30118c82::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
