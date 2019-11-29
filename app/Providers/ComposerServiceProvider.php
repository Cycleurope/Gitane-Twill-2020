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
            $website_title_fr = app(SettingRepository::class)->byKey('website_title_fr', 'seo');
            $website_title_en = app(SettingRepository::class)->byKey('website_title_en', 'seo');
            $meta_description_fr = app(SettingRepository::class)->byKey('meta_description_fr', 'seo');
            $meta_description_en = app(SettingRepository::class)->byKey('meta_description_en', 'seo');
            $meta_keywords_fr = app(SettingRepository::class)->byKey('meta_keywords_fr', 'seo');
            $meta_keywords_en = app(SettingRepository::class)->byKey('meta_keywords_en', 'seo');
            if(app()->getLocale() == 'en') {
                $website_title = $website_title_en;
                $meta_description = $meta_description_en;
                $meta_keywords = $meta_keywords_en;
            } else {
                $website_title = $website_title_fr;
                $meta_description = $meta_description_fr;
                $meta_keywords = $meta_keywords_fr;
            }
            $view->with([
                'website_title' => $website_title,
                'meta_description' => $meta_description,
                'meta_keywords' => $meta_keywords,
            ]);
        });
        View::composer('layouts.frontmenu' , function( $view )
        {
            $frontmenu = Feature::where('bucket_key' , 'primary_navigation')->get()->map(function($feature) {
                return $feature->featured  ;
            })  ;
            $view->with([
                'homenav' => $frontmenu 
            ])  ;
        })  ;
        View::composer('layouts.footer.footermenu' , function( $view )
        {
            $frontmenu = Feature::where('bucket_key' , 'primary_navigation')->get()->map(function($feature) {
                return $feature->featured  ;
            })  ;
            $view->with([
                'homenav' => $frontmenu 
            ])  ;
        })  ;
        View::composer('layouts.footer.pagesmenu' , function( $view )
        {
            $footermenu = Feature::where('bucket_key' , 'pages_navigation')->get()->map(function($feature) {
                return $feature->featured  ;
            })  ;
            $view->with([
                'pagesnav' => $footermenu
            ])  ;
        })  ;
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