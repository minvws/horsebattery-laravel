<?php

namespace MinVWS\HorseBattery\Laravel;

use Illuminate\Support\ServiceProvider;
use Minvws\HorseBattery\HorseBattery;
use Minvws\HorseBattery\PasswordGenerator;

final class HorseBatteryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(PasswordGenerator::class, function () {
            return new HorseBattery();
        });
    }
}
