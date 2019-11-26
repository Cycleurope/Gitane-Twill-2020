<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{

    public function show($page)
    {
        $page = Page::forSlug($page)->first();
        return view('site.page', ['page' => $page]);
    }

}
