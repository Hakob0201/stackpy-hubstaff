<?php

namespace Stack\Hubstaff\Facades;

use Illuminate\Support\Facades\Facade;

class Hubstaff extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hubstaff';
    }
}