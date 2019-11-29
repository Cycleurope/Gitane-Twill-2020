<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Department;
use App\Models\Country;

class StoreController extends Controller
{

    public function index()
    {
        $departments = Department:: all();
        $stores = Store::all();
        return view('site.stores', [
            'stores' => $stores,
            'departments' => $departments,
            'european_stores' => self::getEuropeanStores(),
            'northamerican_stores' => self::getNorthAmricanStores(),
            'southamerican_stores' => self::getSouthAmericanStores(),
            'african_stores' => self::getAfricanStores(),
            'asian_stores' => self::getAsianStores(),
            'oceanian_stores' => self::getOceanianStores(),
            ]);
    }

    public function getStoresForDepartment($department)
    {
        $dep = intval($department);
        $stores = Store::with(['countries' => function($q) {
            $q->where('alpha2', 'fr');
        }])->where('dep', $dep)->get();

        return response()->json($stores);
    }

    public function getEuropeanStores()
    {
        $eu = ['at', 'be', 'bg', 'cy', 'cz', 'de', 'dk', 'ee', 'es', 'fi', 'gb', 'gr', 'hr', 'hu', 'ie', 'it', 'lt', 'lu', 'lv', 'mt', 'nl', 'po', 'pt', 'ro', 'se', 'si', 'sk'];
        $neu = ['al', 'ad', 'am', 'ba', 'by', 'ch', 'fo', 'ge', 'gi', 'is', 'mc', 'mk', 'no', 'ru', 'sm', 'tr', 'ua', 'va'];
        $a = ['de'];
        $s = Store::whereHas('countries', function ($q) use ($eu, $neu) {
            $q->whereIn('alpha2', $eu)
                ->orwhereIn('alpha2', $neu)
                ->orderBy('alpha2', 'asc');
        })->orderBy('title', 'ASC')->get();
        return $s;
    }

    public function getNorthAmricanStores()
    {
        $na = ['ag', 'bs', 'bb', 'bz', 'ca', 'cr', 'cu', 'dm', 'do', 'sv', 'gt', 'gd', 'ht', 'hn', 'jm', 'mx', 'ni', 'pa', 'kn', 'lc', 'vc', 'tt', 'us'];
        $s = Store::whereHas('countries', function($q) use ($na) {
            $q->whereIn('alpha2', $na)
                ->orderBy('alpha2', 'asc');
        })->orderBy('title', 'ASC')->get();
        return $s;
    }

    public function getSouthAmericanStores()
    {
        $sa = ['ar', 'bo', 'br', 'cl', 'co', 'ec', 'gf', 'gy', 'py', 'pe', 'sr', 'uy', 've'];
        $s = Store::whereHas('countries', function($q) use ($sa) {
            $q->whereIn('alpha2', $sa)
                ->orderBy('alpha2', 'asc');
        })->orderBy('title', 'ASC')->get();
        return $s;
    }

    public function getAfricanStores()
    {
        $af = ['dz', 'ao', 'bj', 'bw', 'bf', 'bi', 'cm', 'cv', 'cf', 'td', 'km', 'cg', 'cd', 'dj', 'eg', 'gq', 'er', 'et'];
        $af2 = ['ga', 'gm', 'gh', 'gn', 'gw', 'ci', 'ke', 'ls', 'lr', 'ly', 'mg', 'mw', 'ml', 'mr', 'mu', 'ma', 'mz', 'na'];
        $af3 = ['ne', 'ng', 'rw', 'st', 'sn', 'sc', 'sl', 'so', 'za', 'ss', 'sd', 'sz', 'tz', 'tg', 'tn', 'ug', 'zm', 'zw'];
        $s = Store::whereHas('countries', function($q) use ($af, $af2, $af3) {
            $q->whereIn('alpha2', $af)
                ->orWhereIn('alpha2', $af2)
                ->orWhereIn('alpha2', $af3)
                ->orderBy('alpha2', 'asc');
        })->orderBy('title', 'ASC')->get();
        return $s;
    }

    public function getAsianStores()
    {
        $as = ['af', 'bg', 'bx', 'cb', 'cc', 'gz', 'li', 'ir', 'iy', 'ja', 'kn', 'ku', 'le', 'my', 'np', 'pk', 'pf', 'qa', 'si', 'ce', 'th', 'ts', 'wj', 'ys'];
        $as2 = ['ba', 'bt', 'br', 'cy', 'hk', 'io', 'iq', 'is', 'jo', 'ko', 'ls', 'mh', 'mp', 'mk', 'pp', 'ph', 'su', 'xp', 'sy', 'tu', 'vm', 'ye', 'vn', 'jp'];
        $s = Store::whereHas('countries', function($q) use ($as, $as2) {
            $q->whereIn('alpha2', $as) 
                ->orWhereIn('alpha2', $as2)
                ->orderBy('alpha2', 'asc');
        })->orderBy('title', 'ASC')->get();
        return $s;
        
    }

    public function getOceanianStores()
    {
        $oc = ['fj', 'mh', 'pg', 'vu', 'au', 'nr', 'pw', 'tv', 'sb', 'nz', 'to', 'k1', 'ws', 'fm', 'nc'];
        $s = Store::whereHas('countries', function($q) use ($oc) {
            $q->whereIn('alpha2', $oc)
                ->orderBy('alpha2', 'asc');
        })->orderBy('title', 'ASC')->get();
        return $s;
    }


    public function afterSave($object , $fields)
    {
        $this->updateBrowser($object , $fields ,'countries')  ;
        parent::afterSave($object , $fields)  ;
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object)  ;
        $fields['browsers']['countries'] = $this->getFormFieldsForBrowser($object , 'countries')  ;
        return $fields  ;
    }
}
