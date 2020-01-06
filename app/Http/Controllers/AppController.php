<?php

namespace App\Http\Controllers;

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
        $slides = Slide::where('published', 1)->get();
        $families = Family::where('published', 1)->get();
        return view('site.home', [
            'families' => $families,
            'slides' => $slides,
            'featured' => $featured,
        ]);
    }


    public function switchLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect('/');
    }

    public function language(String $locale)
    {
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
        session(['locale' => $locale]);
        return back();
    }
}
