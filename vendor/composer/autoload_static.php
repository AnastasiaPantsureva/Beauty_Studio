<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47af986508ace4e067106b8d7d201cac
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47af986508ace4e067106b8d7d201cac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47af986508ace4e067106b8d7d201cac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47af986508ace4e067106b8d7d201cac::$classMap;

        }, null, ClassLoader::class);
    }
}