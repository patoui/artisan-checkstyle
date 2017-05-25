<?php

namespace PatOui\Checkstyle;

use Illuminate\Support\ServiceProvider;
use PatOui\Checkstyle\Console\CheckstyleCommand;

class CheckstyleServiceProvider extends ServiceProvider
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
                CheckstyleCommand::class
            ]);
            $this->publishes(
                [
                    __DIR__.'/../../configs/checkstyle.php' => config_path('checkstyle.php'),
                ],
                'checkstyle'
            );
        }
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
