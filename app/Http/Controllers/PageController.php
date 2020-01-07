<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageRepository;
use App\Models\Page;

class PageController extends Controller
{

    public function show($page)
    {
        //dd($page);
        $page = Page::forSlug($page)->first();
        //dd($page);

        //$page = app(PageRepository::class)->forSlug($page);
        //dd($page);
        $slugs = $page->slugs;
        //dd($slugs);
        return view('site.page', [
            'page' => $page,
            'slugs' => $slugs
        ]);
    }

}
