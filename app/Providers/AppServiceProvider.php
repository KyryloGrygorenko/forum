<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        \View::share('channels',\App\Channel::all() ); //Share variable to all views


//        \View::composer('threads.create',function ($view){   // Share variable to specific view
//        \View::composer('*',function ($view){   //Share variable to all views
//            $view->with('channels',\App\Channel::all());
            //this is how it looked in the view without service provider
            //            @foreach(App\Channel::all() as $channel)
            //this is how it looks in the view with service provider
            //            @foreach($channels as $channel)
//    });
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
