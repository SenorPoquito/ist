<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Ward;
use App\Grade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $wards = Ward::all();
        $grades = Grade::all();
        view()->share('wards', $wards);
        view()->share('grades', $grades);
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
