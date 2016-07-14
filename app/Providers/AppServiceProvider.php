<?php

namespace App\Providers;

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
        /**
        * Allow Sidebar to read Tags and Categoryes
        *
        * @return void
        */
        view()->composer(
            'layouts.partials.blog_sidebar',
            'App\Http\ViewComposers\BSidebarComposer'
            );  
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
