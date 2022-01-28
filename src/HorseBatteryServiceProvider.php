<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Minvws\HorseBattery\HorseBattery;
use Minvws\HorseBattery\PasswordGenerator;

final class PasswordGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

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
