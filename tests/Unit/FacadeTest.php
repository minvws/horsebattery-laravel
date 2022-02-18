<?php

namespace MinVWS\HorseBattery\Laravel\Tests;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Minvws\HorseBattery\HorseBattery;
use MinVWS\HorseBattery\Laravel\Facades\PasswordGenerator;

class FacadeTest extends TestCase
{
    use WithFaker;

    public function testItReturnsHorseBattery()
    {
        $passwordGenerator = app(\Minvws\HorseBattery\PasswordGenerator::class);

        self::assertInstanceOf(HorseBattery::class, $passwordGenerator);
    }

    public function testItReturnsAPassword()
    {
        $password = PasswordGenerator::generate();

        self::assertNotEmpty($password);
    }

    public function testCustomWordlist()
    {
        $wordList = $this->generateWordList();

        $this->app->singleton(\Minvws\HorseBattery\PasswordGenerator::class, function () use ($wordList) {
            return new HorseBattery(null, $wordList);
        });

        $password = PasswordGenerator::generate();
        self::assertNotEmpty($password);

        $wordsInPassword = Str::ucsplit($password);
        foreach ($wordsInPassword as $word) {
            self::assertContains($word, $wordList);
        }
    }

    private function generateWordList(): array
    {
        return collect($this->faker->words(9000))
            ->map(function ($word) {
                return ucfirst($word);
            })
            ->toArray();
    }
}
