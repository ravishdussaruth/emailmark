<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa1ad4e06cb002e1a5d099080ea4a9cc
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa1ad4e06cb002e1a5d099080ea4a9cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa1ad4e06cb002e1a5d099080ea4a9cc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
