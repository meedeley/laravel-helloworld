<?php

namespace Meedeley\HelloWorld\Commands;

use Illuminate\Console\Command;
use Meedeley\HelloWorld\Facades\HelloWorld;

class HelloWorldCommand extends Command
{
    protected $signature = "hello:world {name?}";
    protected $description = "Display hello world message";

    public function handle(): void
    {
        $name = $this->argument("name") ?? "World";
        $message = HelloWorld::greet($name);

        $this->info($message);
        $this->line("Package version: " . HelloWorld::getVersion());
    }
}
