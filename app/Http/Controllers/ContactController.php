<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailDeContact;
use App\Models\Message;
use App\Models\Country;

class ContactController extends Controller

{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $countries = Country::all();
        return view('site.contact', [
            'countries' => $countries
        ]);
    }

    public function submit(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'postalcode' => 'required',
            'city' => 'required'
        ]);
        
        $data = [
            'title' => $request->input('title'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'postalcode' => $request->input('postalcode'),
            'city' => $request->input('city'),
            'message' => $request->input('message')
        ];

        Message::create(
            $data
        );

        return redirect()->back();

    }
}
