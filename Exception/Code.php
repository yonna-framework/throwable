<?php

namespace Yonna\Throwable\Exception;

abstract class Code
{

    const THROW = 0;

    const DEBUG = 101;
    const PARAMS = 102;
    const DATABASE = 103;
    const SDK = 104;

}