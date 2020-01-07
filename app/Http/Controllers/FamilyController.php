<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use App\Repositories\FamilyRepository;

use App;
class FamilyController extends Controller
{

    public function show($slug)
    {
        $family = Family::forSlug($slug)->first();
        $family = app(FamilyRepository::class)->forSlug($slug);
        return view('site.family', [
            'family' => $family,
            'slugs' => $family->slugs,
        ]);
    }
}
