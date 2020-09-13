<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Grids\StgRejectGridInterface;
use App\Grids\StgRejectGrid;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
     public function register()
     {
          $this->app->bind(StgRejectGridInterface::class, StgRejectGrid::class);
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
