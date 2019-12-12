<?php 

namespace App\Providers  ;

use View  ;
use Illuminate\Support\ServiceProvider  ;
use App\Models\Family  ;
use A17\Twill\Models\Feature  ;
use A17\Twill\Repositories\SettingRepository;


class ComposerServiceProvider extends ServiceProvider {

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('layouts.head' , function( $view )
        {
            $website_prefix = app(SettingRepository::class)->byKey('website_prefix', 'seo');
            $website_description = app(SettingRepository::class)->byKey('website_description', 'seo');
            $website_keywords = app(SettingRepository::class)->byKey('website_keywords', 'seo');
            $display_global_stores = app(SettingRepository::class)->byKey('display_global_stores', 'display');
            $view->with([
                'website_prefix' => $website_prefix,
                'website_description' => $website_description,
                'website_keywords' => $website_keywords,
                'display_global_stores' => $display_global_stores
            ]);
        });
        View::composer('layouts.frontmenu' , function( $view )
        {
            $frontmenu = Feature::where('bucket_key' , 'primary_navigation')->get()->map(function($feature) {
                return $feature->featured;
            });
            $view->with([
                'homenav' => $frontmenu 
            ]);
        });
        View::composer('layouts.footer.footermenu' , function( $view )
        {
            $frontmenu = Feature::where('bucket_key' , 'primary_navigation')->get()->map(function($feature) {
                return $feature->featured;
            });
            $view->with([
                'homenav' => $frontmenu 
            ]);
        });
        View::composer('layouts.footer.pagesmenu' , function( $view )
        {
            $footermenu = Feature::where('bucket_key' , 'pages_navigation')->get()->map(function($feature) {
                return $feature->featured;
            });
            $view->with([
                'pagesnav' => $footermenu
            ]);
        });
        View::composer('layouts.footer.socialnetworks' , function( $view )
        {
            $facebook = app(SettingRepository::class)->byKey('facebook', 'social');
            $twitter = app(SettingRepository::class)->byKey('twitter', 'social');
            $instagram = app(SettingRepository::class)->byKey('instagram', 'social');
            $youtube = app(SettingRepository::class)->byKey('youtube', 'social');
            $view->with([
                'facebook' => $facebook,
                'twitter' => $twitter,
                'instagram' => $instagram,
                'youtube' => $youtube,
            ]);
        });
    }
}