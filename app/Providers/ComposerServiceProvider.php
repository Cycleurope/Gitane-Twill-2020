<?php 

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Models\Family;
use A17\Twill\Models\Feature;
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
            $website_prefix             = app(SettingRepository::class)->byKey('website_prefix', 'seo');
            $website_description        = app(SettingRepository::class)->byKey('website_description', 'seo');
            $website_keywords           = app(SettingRepository::class)->byKey('website_keywords', 'seo');
            $display_global_stores      = app(SettingRepository::class)->byKey('display_global_stores', 'display');
            $google_analytics_script    = app(SettingsRepository::class)->byKey('google_analytics_script', 'analytics');
            // Balises OpenGraph
            $og_title_fr                = app(SettingsRepository::class)->byKey('opengraph_title_fr', 'opengraph');
            $og_title_en                = app(SettingsRepository::class)->byKey('opengraph_title_en', 'opengraph');
            $og_description_fr          = app(SettingsRepository::class)->byKey('opengraph_description_fr', 'opengraph');
            $og_description_en          = app(SettingsRepository::class)->byKey('opengraph_description_en', 'opengraph');

            $view->with([
                'website_prefix'        => $website_prefix,
                'website_description'   => $website_description,
                'website_keywords'      => $website_keywords,
                'display_global_stores' => $display_global_stores,
                'opengraph_title_fr'    => $og_title_fr,
                'opengraph_title_en'    => $og_title_en,
                'opengraph_description_fr' => $og_description_fr,
                'opengraph_description_en' => $og_description_en
            ]);
        });
        View::composer('layouts.frontmenu' , function( $view )
        {
            $frontmenu = Feature::where('bucket_key' , 'primary_navigation')->get()->map(function($feature) {
                return $feature->featured;
            });
            $view->with([
                'homenav'               => $frontmenu 
            ]);
        });
        View::composer('layouts.footer.footermenu' , function( $view )
        {
            $frontmenu = Feature::where('bucket_key' , 'primary_navigation')->get()->map(function($feature) {
                return $feature->featured;
            });
            $view->with([
                'homenav'               => $frontmenu 
            ]);
        });
        View::composer('layouts.footer.pagesmenu' , function( $view )
        {
            $footermenu = Feature::where('bucket_key' , 'pages_navigation')->get()->map(function($feature) {
                return $feature->featured;
            });
            $view->with([
                'pagesnav'              => $footermenu
            ]);
        });
        View::composer('layouts.footer.socialnetworks' , function( $view )
        {
            $facebook                   = app(SettingRepository::class)->byKey('facebook', 'social');
            $twitter                    = app(SettingRepository::class)->byKey('twitter', 'social');
            $instagram                  = app(SettingRepository::class)->byKey('instagram', 'social');
            $youtube                    = app(SettingRepository::class)->byKey('youtube', 'social');
            $view->with([
                'facebook'              => $facebook,
                'twitter'               => $twitter,
                'instagram'             => $instagram,
                'youtube'               => $youtube,
            ]);
        });
    }
}