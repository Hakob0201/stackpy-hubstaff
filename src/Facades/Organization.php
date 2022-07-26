<?php

namespace Stackpy\Hubstaff\Facades;

use Illuminate\Support\Facades\Facade;

class Organization extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sp-organization';
    }
}