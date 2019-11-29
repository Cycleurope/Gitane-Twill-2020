<?php

namespace App\Http\Controllers;

use A17\Twill\Repositories\SettingRepository;
use Illuminate\Http\Request;
use A17\Twill\Models\Feature;
use App\Models\Family;
use App\Models\Slide;
use App;

class AppController extends Controller
{
    public function home()
    {
        $featured = Feature::where('bucket_key' , 'home_primary_featured')->get()->map(function($feature) {
            return $feature->featured;
        });
        $autopromo_link = app(SettingRepository::class)->byKey('autopromo_link', 'homepage');
        if(app()->getLocale() == 'en') {
            $autopromo_title = app(SettingRepository::class)->byKey('autopromo_title_en', 'homepage');
            $autopromo_content = app(SettingRepository::class)->byKey('autopromo_content_en', 'homepage');
            $autopromo_label = app(SettingRepository::class)->byKey('autopromo_label_en', 'homepage');
        } else {
            $autopromo_title = app(SettingRepository::class)->byKey('autopromo_title_fr', 'homepage');
            $autopromo_content = app(SettingRepository::class)->byKey('autopromo_content_fr', 'homepage');
            $autopromo_label = app(SettingRepository::class)->byKey('autopromo_label_fr', 'homepage');
        }
        $slides = Slide::all();
        $families = Family::all();
        return view('site.home', [
            'families' => $families,
            'slides' => $slides,
            'featured' => $featured,
            'autopromo_title' => $autopromo_title,
            'autopromo_content' => $autopromo_content,
            'autopromo_label' => $autopromo_label,
            'autopromo_link' => $autopromo_link
        ]);
    }


    public function switchLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect('/');
    }
}
