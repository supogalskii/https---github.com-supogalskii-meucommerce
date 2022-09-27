<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09be68c59073fe52248c9975e81d60f8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit09be68c59073fe52248c9975e81d60f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09be68c59073fe52248c9975e81d60f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09be68c59073fe52248c9975e81d60f8::$classMap;

        }, null, ClassLoader::class);
    }
}
