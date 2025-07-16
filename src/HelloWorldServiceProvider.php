<?php

namespace Meedeley\HelloWorld;

use Illuminate\Support\ServiceProvider;
use Meedeley\HelloWorld\Commands\HelloWorldCommand;
use Meedeley\HelloWorld\Services\HelloWorldService;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton("hello-world", fn() => new HelloWorldService());

        $this->mergeConfigFrom(
            __DIR__ . "/../config/hello-world.php",
            "hello-world"
        );
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([HelloWorldCommand::class]);
        }

        $this->publishes(
            [
                __DIR__ . "/../config/hello-world.php" => config_path(
                    "hello-world.php"
                ),
            ],
            "config"
        );
    }
}
