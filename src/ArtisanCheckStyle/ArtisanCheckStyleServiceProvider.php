<?php

namespace ArtisanCheckstyle;

use ArtisanCheckstyle\ArtisanCheckstyle;
use Illuminate\Support\ServiceProvider;

class ArtisanCheckstyleServiceProvider extends ServiceProvider
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
                ArtisanCheckstyle::class
            ]);
        }
        $this->publishes(
            [
                __DIR__.'/../../configs/checkstyle.php' => config_path('checkstyle.php'),
            ],
            'checkstyle'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
