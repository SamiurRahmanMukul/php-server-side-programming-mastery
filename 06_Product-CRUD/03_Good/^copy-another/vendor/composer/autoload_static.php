<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5770cdb1942afd7ec689711306ea0a7
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5770cdb1942afd7ec689711306ea0a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5770cdb1942afd7ec689711306ea0a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5770cdb1942afd7ec689711306ea0a7::$classMap;

        }, null, ClassLoader::class);
    }
}
