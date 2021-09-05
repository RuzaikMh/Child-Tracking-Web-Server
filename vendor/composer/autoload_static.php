<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76ec683ab2fb4b07ef5cbaefac34cd51
{
    public static $classMap = array (
        'Firebase\\Error' => __DIR__ . '/..' . '/ktamas77/firebase-php/src/firebaseError.php',
        'Firebase\\FirebaseInterface' => __DIR__ . '/..' . '/ktamas77/firebase-php/src/firebaseInterface.php',
        'Firebase\\FirebaseLib' => __DIR__ . '/..' . '/ktamas77/firebase-php/src/firebaseLib.php',
        'Firebase\\FirebaseStub' => __DIR__ . '/..' . '/ktamas77/firebase-php/src/firebaseStub.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit76ec683ab2fb4b07ef5cbaefac34cd51::$classMap;

        }, null, ClassLoader::class);
    }
}
