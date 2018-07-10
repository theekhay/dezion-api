<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider ;
use Illuminate\Support\Facades\Schema ;
use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(env('APP_ENV') !== 'local')
        {
            $url->forceScheme('https');
        }
        
        Schema::defaultStringLength(191) ;
        //Resource::WithoutWrapping(); //uncomment this to rteurn the json response without the data wrapper. 

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
