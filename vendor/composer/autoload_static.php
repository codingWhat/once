<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6481dfbe6e4f431ce0f955853a94f031
{
    public static $files = array (
        '9ab8dbffddc360948209f2bae8954824' => __DIR__ . '/../..' . '/files/helpers.php',
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Akon' => __DIR__ . '/../..' . '/src/Akon.php',
        'Map' => __DIR__ . '/../..' . '/classmap/map.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6481dfbe6e4f431ce0f955853a94f031::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6481dfbe6e4f431ce0f955853a94f031::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6481dfbe6e4f431ce0f955853a94f031::$classMap;

        }, null, ClassLoader::class);
    }
}
