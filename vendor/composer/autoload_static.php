<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit042291945802a927fcdd468579454f6d
{
    public static $files = array (
        '2b7a8a3c1307a172440e54b7ace86b35' => __DIR__ . '/../..' . '/app/helpers.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInit042291945802a927fcdd468579454f6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit042291945802a927fcdd468579454f6d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit042291945802a927fcdd468579454f6d::$classMap;

        }, null, ClassLoader::class);
    }
}
