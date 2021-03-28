<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\catagory;
use App\slider;
use App\color;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);

         $catagories=catagory::where('status',1)->get();

       
        view::share('catagories',$catagories);

        $slider=slider::where('status',1)->get();
         view::share('slider',$slider);
         

    }
}
