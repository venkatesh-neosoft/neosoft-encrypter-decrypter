<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88c077dddb61bf983f7e09621ee64476
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Providers\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/providers',
        ),
    );

    public static $classMap = array (
        'Providers\\Classes\\Encrypter' => __DIR__ . '/../..' . '/providers/Classes/Encrypter.php',
        'Providers\\Core\\Singleton' => __DIR__ . '/../..' . '/providers/Core/Singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88c077dddb61bf983f7e09621ee64476::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88c077dddb61bf983f7e09621ee64476::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88c077dddb61bf983f7e09621ee64476::$classMap;

        }, null, ClassLoader::class);
    }
}