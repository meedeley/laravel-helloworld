<?php

namespace Meedeley\HelloWorld\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string greet(string $name = "World")
 * @method static string getVersion()
 */
class HelloWorld extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return "hello-world";
    }
}
