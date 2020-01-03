<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Models\Translations\BikeTranslation;
use App\Models\Bike;

class SearchController extends Controller
{
    public function index()
    {
        // on laisse vide, on s'en balance les roubignoles.
    }

    public function search(Request $request)
    {
        $search_term = $request->input('query');

        $search_results = (new Search())
                        ->registerModel(\App\Models\Bike::class, 'title')
                        ->perform($search_term);
    }

    public function jsearch($searchterm)
    {   
        // $search_results = (new Search())
        //                 ->registerModel(\App\Models\Translations\BikeTranslation::class, 'title')
        //                 ->search($searchterm);
        // return response()->json($search_results);
        $slugs_array = [];
        $bikes = BikeTranslation::where('title', 'LIKE', '%'.$searchterm.'%')
            ->where('locale', app()->getLocale())->get();
        $i = 0;
        foreach($bikes as $bike) {
            $bike_id = $bike->bike_id;
            $bike_slug = Bike::find($bike_id)->slug;
            $bikes[$i]["url"] = route('site.bikes.show', ["locale" => app()->getLocale(), "slug" => $bike_slug]);
            $i++;
        }
        $json = [
            "bikes" => $bikes,
        ];
        return response()->json($json);
    }
}
