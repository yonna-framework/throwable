<?php

namespace Yonna\Throwable;


use Throwable;

class Exception
{

    private static function e($type, $msg)
    {
        throw new \Exception("[{$type}]{$msg}", Type::code($type));
    }

    /**
     * 抛出原有
     * @param Throwable $e
     * @throws Throwable
     */
    public static function origin(Throwable $e)
    {
        throw $e;
    }

    public static function throw($msg)
    {
        self::e(Type::THROW, $msg);
    }

    public static function debug($msg)
    {
        self::e(Type::DEBUG, $msg);
    }

    public static function abort($msg)
    {
        self::e(Type::ABORT, $msg);
    }

    public static function database($msg)
    {
        self::e(Type::DATABASE, $msg);
    }

    public static function param($msg)
    {
        self::e(Type::PARAM, $msg);
    }

}