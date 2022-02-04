<?php

namespace MinVWS\HorseBattery\Laravel\Tests;

use MinVWS\HorseBattery\Laravel\HorseBatteryServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app): array
    {
        return [
            HorseBatteryServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}