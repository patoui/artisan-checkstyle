<?php

namespace ArtisanCheckstyle;

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
        $this->publishes([
            __DIR__.'/../config/artisan-phpcs.php' => config_path('artisan-phpcs.php'),
        ]);
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
