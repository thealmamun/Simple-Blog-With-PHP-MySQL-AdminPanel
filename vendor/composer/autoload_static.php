<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit974b0b8cf58f6592a8e56e0fe686eebb
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit974b0b8cf58f6592a8e56e0fe686eebb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit974b0b8cf58f6592a8e56e0fe686eebb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
