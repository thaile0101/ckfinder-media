<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fb1750dacd906f88e5b94614efa5551
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ThaiLe\\Repository\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ThaiLe\\Repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fb1750dacd906f88e5b94614efa5551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fb1750dacd906f88e5b94614efa5551::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
