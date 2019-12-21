<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\view;


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

        View::composer(
            ['partials.nav_dashboard', 'partials.nav'], 'App\Http\ViewComposers\NotificationViewComposer'
            
        );
        Schema::DefaultStringLength(191); 
    }
}
