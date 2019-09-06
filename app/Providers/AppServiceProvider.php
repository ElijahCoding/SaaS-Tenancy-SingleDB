<?php

namespace App\Providers;

use App\Tenant\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Tenant\Observers\TenantObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \DB::listen(function ($query) {
        //     dump($query->sql);
        // });

        $this->app->singleton(Manager::class, function () {
            return new Manager();
        });

        $this->app->singleton(TenantObserver::class, function () {
            return new TenantObserver(app(Manager::class)->getTenant());
        });

        Request::macro('tenant', function () {
            return app(Manager::class)->getTenant();
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
