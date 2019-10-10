<?php

namespace App\Providers;

use App\Repositories\Core\Eloquent\ClientEloquentRepository;
use App\Repositories\Core\Eloquent\PastryEloquentRepository;
use App\Repositories\Interfaces\ClientInterfaceRepository;
use App\Repositories\Interfaces\PastryInterfaceRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            ClientInterfaceRepository::class,
            ClientEloquentRepository::class
        );

        $this->app->bind(
            PastryInterfaceRepository::class,
            PastryEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
