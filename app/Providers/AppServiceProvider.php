<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Grids\StgRejectGridInterface;
use App\Grids\StgRejectGrid;
use App\Grids\StgRejectFgajiGridInterface;
use App\Grids\StgRejectFgajiGrid;
use App\Grids\ArchiveCleansingGridInterface;
use App\Grids\ArchiveCleansingGrid;
use App\Grids\ArchiveCleansingFgajiGridInterface;
use App\Grids\ArchiveCleansingFgajiGrid;

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
          $this->app->bind(StgRejectFgajiGridInterface::class, StgRejectFgajiGrid::class);
          $this->app->bind(ArchiveCleansingGridInterface::class, ArchiveCleansingGrid::class);
          $this->app->bind(ArchiveCleansingFgajiGridInterface::class, ArchiveCleansingFgajiGrid::class);
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
