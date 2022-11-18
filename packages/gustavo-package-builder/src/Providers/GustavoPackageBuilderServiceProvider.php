<?php

namespace Gustavoviniciusdemorais\GustavoPackageBuilder\Providers;

use Illuminate\Support\ServiceProvider;
use Gustavoviniciusdemorais\GustavoPackageBuilder\GustavoPackageBuilder;

class GustavoPackageBuilderServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('gustavo-package-builder', function ($app) {
            return new GustavoPackageBuilder();
        });
    }
}
