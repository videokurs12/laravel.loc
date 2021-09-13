<?php

namespace App\Providers;

use App\Models\Rubric;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using class based composers...
//        View::composer('layouts.footer', ProfileComposer::class);

        // Using closure based composers...
        View::composer('layouts.footer', function ($view) {
            $view->with('rubrics', Rubric::all());
        });

//        view()->composer('layouts.footer', function ($view) {
//            $view->with('rubrics', Rubric::all());
//        });


    }
}
