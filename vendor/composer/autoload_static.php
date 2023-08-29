<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ca3b17fff3c750d884cb7da397c2cda
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ca3b17fff3c750d884cb7da397c2cda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ca3b17fff3c750d884cb7da397c2cda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ca3b17fff3c750d884cb7da397c2cda::$classMap;

        }, null, ClassLoader::class);
    }
}