<?php

namespace Stackpy\Hubstaff;

use Illuminate\Support\ServiceProvider;

class HubstaffServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/hubstaff.php' => config_path('hubstaff.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("sp-organization", \Stackpy\Hubstaff\Entities\Organization::class);
    }
}