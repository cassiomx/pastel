<?php

namespace App\Providers;

use App\Repositories\Core\Eloquent\ClientEloquentRepository;
use App\Repositories\Interfaces\ClientInterfaceRepository;
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
