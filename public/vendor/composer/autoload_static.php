<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite78a30c106a51c1e684eada78a6ffefb
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite78a30c106a51c1e684eada78a6ffefb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite78a30c106a51c1e684eada78a6ffefb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
