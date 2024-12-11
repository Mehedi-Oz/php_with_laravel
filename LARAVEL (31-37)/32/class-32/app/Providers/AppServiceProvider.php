<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;

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
        View::composer('include.header', function ($view) {
            $view->with('categories', Category::getAllCategory()); //with

//            $view(['categories' => Category::getAllCategory()]); //array_index
        });

        View::composer('include.footer', function ($view) {
            $view->with('categories', Category::getAllCategory());
        });
    }
}
