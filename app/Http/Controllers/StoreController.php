<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Department;

class StoreController extends Controller
{

    public function index()
    {
        $departments                = Department:: all();
        $stores                     = Store::all();
        $europeanStores             = self::getEuropeanStores();
        $northAmericanStores        = self::getNorthAmericanStores();
        $southAmericanStores        = self::getSouthAmericanStores();
        $africanStores              = self::getAfricanStores();
        $asianStores                = self::getAsianStores();
        $oceanianStores             = self::getOceanianStores();
        return view('site.stores', [
            'stores'                => $stores,
            'european_stores'       => $europeanStores,
            'northamerican_stores'  => $northAmericanStores,
            'southamerican_stores'  => $southAmericanStores,
            'african_stores'        => $africanStores,
            'asian_stores'          => $asianStores,
            'oceanian_stores'       => $oceanianStores,
            'departments'           => $departments,
            ]);
    }

    public function getStoresForDepartment($department)
    {
        $dep = intval($department);
        $stores = Store::where('dep', $dep)->get();
        return response()->json($stores);
    }

    public function getEuropeanStores()
    {
        $countriesArray = ["al","ad","at","az","by","be","ba","bg","hr","cy","cz","dk","ee","fi","ge","de","gr","hu","is","ie","it","kz","xk","lv","li","lt","lu","mk","mt","md","mc","me","nl","no","pl","pt","ro","ru","sm","rs","sk", "si","es","se","ch","tr","ua","gb","va"];
        $stores = Store::whereHas('countries', function($q) use($countriesArray) {
            $q->whereIn('alpha2', $countriesArray);
        })->get();
        return $stores;
    }

    public function getNorthAmericanStores()
    {
        $countriesArray = ['ag', 'ai', 'an', 'aw', 'bb', 'bl', 'bm', 'bs', 'bz', 'ca', 'cr', 'cu', 'dm', 'do', 'gd', 'gl', 'gp', 'gt', 'hn', 'ht', 'jm', 'kn', 'ky', 'lc', 'mf', 'mq', 'ms', 'mx', 'ni', 'pa', 'pm', 'pr', 'sv', 'tc', 'tt', 'us', 'vc', 'vg', 'vi'];
        $stores = Store::whereHas('countries', function($q) use($countriesArray) {
            $q->whereIn('alpha2', $countriesArray);
        })->get();
        return $stores;
    }

    public function getSouthAmericanStores()
    {
        $countriesArray = ['ar' ,'bo' ,'br' ,'cl' ,'co' ,'ec' ,'fk' ,'gf' ,'gy' ,'pe' ,'y' ,'sr' ,'uy' ,'ve'];
        $stores = Store::whereHas('countries', function($q) use ($countriesArray) {
            $q->whereIn('alpha2', $countriesArray);
        })->get();
        return $stores;
    }

    public function getAfricanStores()
    {
        $countriesArray = ['ao', 'bf', 'bi', 'bj', 'bw', 'cd', 'cf', 'cg', 'ci', 'cm', 'cv', 'dj', 'dz', 'eg', 'eh', 'er', 'et', 'ga', 'gh', 'gm', 'gn', 'gq', 'gw', 'ke', 'km', 'lr', 'ls', 'ly', 'ma', 'mg', 'ml', 'mr', 'mu', 'mw', 'mz', 'na', 'ne', 'ng', 're', 'rw', 'sc', 'sd', 'sh', 'sl', 'sn', 'so', 'st', 'sz', 'td', 'tg', 'tn', 'tz', 'ug', 'yt', 'za', 'zm', 'zw'];
        $stores = Store::whereHas('countries', function($q) use ($countriesArray) {
            $q->whereIn('alpha2', $countriesArray);
        })->get();
        return $stores;
    }

    public function getAsianStores()
    {
        $countriesArray = ['ae' ,'af' ,'am' ,'ap' ,'az' ,'bd' ,'bh' ,'bn' ,'bt' ,'cc' ,'cn' ,'cx' ,'cy' ,'ge' ,'hk' ,'id' ,'il' ,'in' ,'io' ,'iq' ,'ir' ,'jo' ,'jp' ,'kg' ,'kh' ,'kp' ,'kr' ,'kw' ,'kz' ,'la' ,'lb' ,'lk' ,'mm' ,'mn' ,'mo' ,'mv' ,'my' ,'np' ,'om' ,'ph' ,'pk' ,'ps' ,'qa' ,'sa' ,'sg' ,'sy' ,'th' ,'tj' ,'tl' ,'tm' ,'tw' ,'uz' ,'vn' ,'ye'];
        $stores = Store::whereHas('countries', function($q) use ($countriesArray) {
            $q->whereIn('alpha2', $countriesArray);
        })->get();
        return $stores;
    }

    public function getOceanianStores()
    {
        $countriesArray = ['as' ,'au' ,'ck' ,'fj' ,'fm' ,'gu' ,'ki' ,'mh' ,'mp' ,'nc' ,'nf' ,'nr' ,'nu' ,'nz' ,'pf' ,'pg' ,'pn' ,'pw' ,'sb' ,'tk' ,'to' ,'tv' ,'um' ,'vu' ,'wf' ,'ws'];
        $stores = Store::whereHas('countries', function($q) use ($countriesArray) {
            $q->whereIn('alpha2', $countriesArray);
        })->get();
        return $stores;
    }

}
