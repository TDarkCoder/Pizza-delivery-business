<?php

namespace App\Providers;

use App\Services\Contracts\CartServiceContract;
use App\Services\CookieCartService;
use App\Services\DatabaseCartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CartServiceContract::class, function(){
            return Auth::check() ? new DatabaseCartService() : new CookieCartService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
