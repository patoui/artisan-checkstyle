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
            __DIR__.'/../../configs/artisan-checkstyle.php' => config_path('artisan-checkstyle.php'),
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
