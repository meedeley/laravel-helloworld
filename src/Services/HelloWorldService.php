<?php

namespace Meedeley\HelloWorld\Services;

class HelloWorldService
{
    public function greet(string $name = "World"): string
    {
        $message = config("hello-world.message", "Hello");

        return "$message $name";
    }

    public function getVersion(): string
    {
        return "1.0.2";
    }
}
