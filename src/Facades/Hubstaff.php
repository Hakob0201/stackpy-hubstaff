<?php

namespace Stackpy\Hubstaff\Facades;

use Illuminate\Support\Facades\Facade;

class Hubstaff extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hubstaff';
    }
}