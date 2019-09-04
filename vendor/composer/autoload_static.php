<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01b33627bce27a076aa1fa57b4cfd7a1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mark\\' => 5,
            'MainObject\\' => 11,
        ),
        'E' => 
        array (
            'Element\\' => 8,
        ),
        'D' => 
        array (
            'Dimension\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Mark',
        ),
        'MainObject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MainObject',
        ),
        'Element\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Element',
        ),
        'Dimension\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Dimension',
        ),
    );

    public static $classMap = array (
        'Dimension\\Dimension' => __DIR__ . '/../..' . '/Dimension/Dimension.php',
        'Element\\Element' => __DIR__ . '/../..' . '/Element/Element.php',
        'Element\\LnElem' => __DIR__ . '/../..' . '/Element/LnElem.php',
        'Element\\SqElem' => __DIR__ . '/../..' . '/Element/SqElem.php',
        'MainObject\\MainObject' => __DIR__ . '/../..' . '/MainObject/MainObject.php',
        'Mark\\Mark' => __DIR__ . '/../..' . '/Mark/Mark.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01b33627bce27a076aa1fa57b4cfd7a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01b33627bce27a076aa1fa57b4cfd7a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01b33627bce27a076aa1fa57b4cfd7a1::$classMap;

        }, null, ClassLoader::class);
    }
}
