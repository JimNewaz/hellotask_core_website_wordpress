<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit781067273fba8210095d0b4ef7b863d7
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nilambar\\AdminNotice\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nilambar\\AdminNotice\\' => 
        array (
            0 => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nilambar\\AdminNotice\\Notice' => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src/Notice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit781067273fba8210095d0b4ef7b863d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit781067273fba8210095d0b4ef7b863d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit781067273fba8210095d0b4ef7b863d7::$classMap;

        }, null, ClassLoader::class);
    }
}