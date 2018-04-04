<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\Shipment;

class ShipmentServiceProvider extends ServiceProvider
{
    public $token;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Services\Shipment', function ($app) {
            return new Shipment();
        });
    }
}