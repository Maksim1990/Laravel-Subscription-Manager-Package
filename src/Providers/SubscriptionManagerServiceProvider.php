<?php

namespace MaksimN\SubscriptionManager\Providers;

use Illuminate\Support\ServiceProvider;
use MaksimN\SubscriptionManager\Services\SubscriptionManager;

class SubscriptionManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        include __DIR__ . '/../routes/routes.php';
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->publishes([
            __DIR__ . '/../config/subscription-manager.php', 'subscription-manager'
        ]);
    }

    public function register()
    {
        $this->app->bind('SubscriptionManager', function () {
            return new SubscriptionManager();
        });

        $this->app->make('MaksimN\SubscriptionManager\Http\Controllers\SubscriptionManagerController');
        $this->loadViewsFrom(__DIR__.'/../views', 'subscription-manager');
    }
}
