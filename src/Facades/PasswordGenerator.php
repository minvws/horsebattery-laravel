<?php

namespace MinVWS\HorseBattery\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class PasswordGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Minvws\HorseBattery\PasswordGenerator::class;
    }
}