<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Area;
use App\Age;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $areas = Area::all();
        $ages = Age::all();
        view()->share('areas', $areas);
        view()->share('ages', $ages);
        session()->put('recentSchools2', "test");

        session()->put('recentSchools1', "resr");
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
