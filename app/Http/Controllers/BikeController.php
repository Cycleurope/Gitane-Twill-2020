<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Repositories\BikeRepository;
use App\Models\Family;

class BikeController extends Controller
{
    public function show($slug)
    {
        $bike = Bike::forSlug($slug)->first();
        $bike_slugs = $bike->slugs;
        $bike = app(BikeRepository::class)->forSlug($slug);
        $family_id = $bike->families()->first()->id;
        $family = Family::find($family_id);
        $related_bikes = $family->bikes()->get();
        return view('site.bike', [
            'bike' => $bike,
            'related_bikes' => $related_bikes,
            'family' => $family,
            'bike_slugs' => $bike_slugs,
        ]);
    }
}
