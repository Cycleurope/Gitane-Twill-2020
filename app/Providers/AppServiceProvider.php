<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Blade;

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
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
        Relation::morphMap([
            'bikes' => 'App\Models\Bike'
        ]);
        Relation::morphMap([
            'stores' => 'App\Models\Store'
        ]);
        Relation::morphMap([
            'countries' => 'App\Models\Country'
        ]);
        Relation::morphMap([
            'families' => 'App\Models\Family' 
        ]);
        Relation::morphMap([
            'pages' => 'App\Models\Page' 
        ]);
    }
}
