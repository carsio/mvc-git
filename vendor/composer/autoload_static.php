<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb537ff76e01bc9a87a34c6156392ad0f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb537ff76e01bc9a87a34c6156392ad0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb537ff76e01bc9a87a34c6156392ad0f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
