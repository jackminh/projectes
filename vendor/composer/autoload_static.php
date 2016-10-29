<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit700e0c776944ce208701278af31bbf6b
{
    public static $files = array (
        'b4af729c7e6b634df6e1b8572e5b94c4' => __DIR__ . '/../..' . '/src/library/functions.php',
    );

    public static $classMap = array (
        'App\\libraries\\Calculator' => __DIR__ . '/../..' . '/app/libraries/Calculator.php',
        'App\\libraries\\IAcmePrototype' => __DIR__ . '/../..' . '/app/libraries/IAcmeprototype.php',
        'App\\modules\\Logger' => __DIR__ . '/../..' . '/app/modules/Logger.php',
        'App\\modules\\Registry' => __DIR__ . '/../..' . '/app/modules/Registry.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit700e0c776944ce208701278af31bbf6b::$classMap;

        }, null, ClassLoader::class);
    }
}
