<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7704c91e2f7a8bf73191103b1fbe5431
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'D' => 
        array (
            'Drush' => 
            array (
                0 => __DIR__ . '/..' . '/drush/drush/lib',
            ),
        ),
        'B' => 
        array (
            'Boris' => 
            array (
                0 => __DIR__ . '/..' . '/d11wtq/boris/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Console_Table' => __DIR__ . '/..' . '/pear/console_table/Table.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7704c91e2f7a8bf73191103b1fbe5431::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7704c91e2f7a8bf73191103b1fbe5431::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7704c91e2f7a8bf73191103b1fbe5431::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7704c91e2f7a8bf73191103b1fbe5431::$classMap;

        }, null, ClassLoader::class);
    }
}
