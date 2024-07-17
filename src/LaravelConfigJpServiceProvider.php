<?php

namespace Maru0914\LaravelConfigJp;

use Illuminate\Support\ServiceProvider;

class LaravelConfigJpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\PublishCommand::class,
            ]);
        }
    }
}
