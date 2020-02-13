<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a8e565976724f95f450fa9b4f9264e4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a8e565976724f95f450fa9b4f9264e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a8e565976724f95f450fa9b4f9264e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
