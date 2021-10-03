<?php

namespace Thtg88\Pingable;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PingableServiceProvider extends ServiceProvider // implements DeferrableProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/pingable.php');

        $this->publishes([
            __DIR__ . '/../config/pingable.php' => config_path('pingable.php'),
        ], 'pingable-config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/pingable.php', 'pingable');
    }
}
