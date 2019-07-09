<?php

namespace Yonna\Throwable;

class Type
{

    const THROW = 'THROW';
    const DEBUG = 'DEBUG';
    const ABORT = 'ABORT';

    const PARAM = 'PARAM';
    const DATABASE = 'DATABASE';



    private static $codes = [
        self::THROW => 100,
        self::DEBUG => 101,
        self::ABORT => 102,

        self::PARAM => 2001,
        self::DATABASE => 2002,
    ];



    /**
     * get error code
     * @param $type
     * @return int|mixed
     */
    public static function code($type)
    {
        return self::$codes[$type] ?? 0;
    }

}