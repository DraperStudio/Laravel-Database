<?php

namespace DraperStudio\Database;

use DraperStudio\Database\Connectors\ConnectionFactory;
use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;
use Sofa\Eloquence\ServiceProvider as SofaServiceProvider;

class ServiceProvider extends BaseProvider
{
    public function register()
    {
        if (class_exists(SofaServiceProvider::class)) {
            $this->app->register(SofaServiceProvider::class);
        }

        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });
    }

    public function provides()
    {
        $services = [];

        if (class_exists(SofaServiceProvider::class)) {
            $services[] = SofaServiceProvider::class;
        }

        return $services;
    }
}
