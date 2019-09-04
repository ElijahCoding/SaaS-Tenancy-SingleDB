<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tenant\Manager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \DB::listen(function ($query) {
            dump($query->sql);
        });

        $this->app->singleton(Manager::class, function () {
            return new Manager();
        });
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
