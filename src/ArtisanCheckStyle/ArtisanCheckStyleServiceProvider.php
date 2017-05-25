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
