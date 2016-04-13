<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Providers\AppVersions\AppVersions;

class AppVersionsProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AppVersions::class, function () {
            return new AppVersions();
        });
    }
}
