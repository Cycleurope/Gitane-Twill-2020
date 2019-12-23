<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller

{

    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        return view('site.contact');
    }

    public function submit(Request $request)
    {
        request()->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'postalcode' => 'required',
            'city' => 'required'
        ]);
        dd("ok");

        //return redirect()->route('site.contact.index');

    }
}
