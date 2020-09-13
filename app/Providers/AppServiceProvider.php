<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Grids\AccountsGridInterface;
use App\Grids\AccountsGrid;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
     public function register()
     {
         $this->app->bind(AccountsGridInterface::class, AccountsGrid::class);
     }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
