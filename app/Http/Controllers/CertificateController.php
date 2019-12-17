<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Repositories\CertificateRepository;

use App;
class CertificateController extends Controller
{

    public function index()
    {
        $certs = Certificate::all();
        dd($certs);
        return $certs;
    }
}
