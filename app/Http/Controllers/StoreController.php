<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Department;

class StoreController extends Controller
{

    public function index()
    {
        $departments = Department:: all();
        $stores = Store::all();
        return view('site.stores', [
            'stores' => $stores,
            'departments' => $departments,
            ]);
    }

    public function getStoresForDepartment($department)
    {
        $dep = intval($department);
        $stores = Store::where('dep', $dep)->get();
        return response()->json($stores);
    }

}
