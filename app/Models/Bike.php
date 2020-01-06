<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

//use Laravel\Scout\Searchable;
//use Spatie\Searchable\Searchable;
//use Spatie\Searchable\SearchResult;

class Bike extends Model    
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles;

    protected $fillable = [
        'published',
        'title', 'weight' ,
        'reference', 'price_from', 'public_price',
        'position', 'datasheet_theme', 'geometries_theme',
        'price_from', 'public_price', 'datasheet_theme', 'geometries_theme',
    ]  ;

    protected $indexOptions = [
        'reorder' => true,
    ];

    public $translatedAttributes = [
        'title',
        'name' , 'subname',
        'description',
        'frame' , 'fork' , 'rear_suspension' ,
        'engine' , 'battery' , 'display' , 'distance_range' , 'charger' ,
        'rims' , 'hubs' , 'tires' ,
        'shifters' , 'rear_derailleur' , 'front_derailleur' , 'crankset' , 'cassette' ,
        'saddle' , 'seatpost' , 'handlebars' , 'stem' , 'brakes' ,
        'mudguards' , 'racks' , 'chainguard' , 'stand' , 'lightings' , 'active',
        'pedals', 'transmission', 'plus',
        'meta_description', 'meta_keywords',
    ]  ;
    
    public $slugAttributes = [
        'title' ,
    ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ]  ;

    public $mediasParams = [
        'desktop_cover' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 1800 / 600 , // ratio as a fraction or number
                ] ,
            ] ,
                ],
        'tablet_cover' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 16 / 9 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
        'mobile_cover' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 16 / 9 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
        'picture' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 1800 / 1200 , // ratio as a fraction or number
                ] ,
            ] ,
            'squared' => [ // crop name
                [
                    'name' => 'squared' ,// ratio name , same as crop name if single
                    'ratio' => 16 / 16 , // ratio as a fraction or number
                    'crop' => [
                        'w' => 400 ,
                        'h' => 400
                    ]
                ] ,
            ] ,
            'mobile' => [
                [
                    'name' => 'landscape' , // ratio name , multiple allowed
                    'ratio' => 16 / 9 ,
                ] ,
                [
                    'name' => 'portrait' , // ratio name , multiple allowed
                    'ratio' => 3 / 4 ,
                ] ,
            ] ,
        ] ,
        'gallery' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 1800 / 1200 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
    ]  ;

    public $filesParams = ['datasheet'];

    public function families()
    {
        return $this->belongsToMany(\App\Models\Family::class)  ;
    }

    public function colors()
    {
        return $this->belongsToMany(\App\Models\Color::class)  ;
    }

    public function sizes()
    {
        return $this->belongsToMany(\App\Models\Size::class)  ;
    }

    public function accessories()
    {
        return $this->belongsToMany(\App\Models\Accessory::class);
    }

    public function geometries()
    {
        return $this->belongsToMany(\App\Models\Geometry::class);
    }

    public function friendlyPublicPrice()
    {
        if(app()->getLocale() == "fr") {
            $s = " ";
            $c = ".";
        } else {
            $s = ".";
            $c = ",";
        }
        $pp = $this->public_price;
        if($pp == 0) {
            $friendlyPublicPrice = "";
        } else if($pp < 100) {
            $friendlyPublicPrice = substr($pp, 0, 2).$c."<span class='cents'>".substr($pp, 4, 2)."</span> €";
        } else if($pp < 1000) {
            $friendlyPublicPrice = substr($pp, 0, 3).$c."<span class='cents'>".substr($pp, 4, 2)."</span> €";
        } else if($pp < 10000) {
            $friendlyPublicPrice = substr($pp, 0, 1)."$s".substr($pp, 1, 3).$c."<span class='cents'>".substr($pp, 5, 2)."</span> €";
        } else if($pp < 100000) {
            $friendlyPublicPrice = substr($pp, 0, 2)."$s".substr($pp, 2, 3).$c."<span class='cents'>".substr($pp, 6, 2)."</span> €";
        }
        return $friendlyPublicPrice;
    }

    public function emptyFrameset()
    {

        $frame              = trim($this->frame)  ;
        $fork               = trim($this->fork)  ;
        $rear_suspension    = trim($this->rear_suspension)  ;
        if($frame == '' 
            && $fork == '' 
            && $rear_suspension == '') return 1  ;
        return 0  ;

    }

    public function emptyElectricComponents()
    {

        $engine             = trim($this->engine);
        $battery            = trim($this->battery);
        $display            = trim($this->display);
        $charger            = trim($this->charger);
        $distance_range     = trim($this->distance_range);
        if($engine == '' 
            && $battery == '' 
            && $display == '' 
            && $charger == '' 
            && $distance_range == '') return 1;
        return 0;

    }

    public function emptyWheels()
    {
        $rims       = trim($this->rims);
        $hubs       = trim($this->hubs);
        $tires      = trim($this->tires);
        if(empty($rims) && empty($hubs) && empty($tires) ) return 1;
        return 0;
    }

    public function emptyTransmission()
    {
        $transmission       = trim($this->transmission);
        $shifters           = trim($this->shifters);
        $rear_derailleur    = trim($this->rear_derailleur);
        $front_derailleur   = trim($this->front_derailleur);
        $crankset           = trim($this->crankset);
        $cassette           = trim($this->cassette);
        if($shifters == '' 
            && $transmission == '' 
            && $rear_derailleur == '' 
            && $front_derailleur == '' 
            && $crankset == '' 
            && $cassette == '') return 1;
        return 0;
        
    }

    public function emptyComponents()
    {

        $saddle             = trim($this->saddle);
        $seatpost           = trim($this->seatpost);
        $handlebars         = trim($this->handlebars);
        $stem               = trim($this->stem);
        $brakes             = trim($this->brakes);
        $pedals             = trim($this->pedals);
        if (empty($saddle) && empty($seatpost) && empty($handlebars) && empty($stem) && empty($brakes) && empty($pedals) ) return 1  ;
        return 0;

    }

    public function emptyDataSheet()
    {
        if($this->emptyFrameset()
            && $this->emptyElectricComponents()
            && $this->emptyWheels()
            && $this->emptyTransmission()
            && $this->emptyComponents()
            && $this->emptyAccessories()
        ) return 1;
        return 0;
    }

    public function emptyAccessories()
    {

        $mudguards          = trim($this->mudguards)  ;
        $racks              = trim($this->racks)  ;
        $chainguard         = trim($this->chainguard)  ;
        $lightings          = trim($this->ightings)  ;
        $stand              = trim($this->stand)  ;
        $plus               = trim($this->plus)  ;
        if (empty($mudguards) && empty($racks) && empty($chainguard) && empty($lightings) && empty($stand) && empty($plus)) return 1  ;
        return 0;

    }

    public function emptyOther()
    {
        $weight             = trim($this->weight);
        if (empty($weight)) {
            return 1;
        }
        return 0;
    }

    public function certificates()
    {
        return $this->belongsToMany(Certificate::class);
    }

    public function getFamiliesSelectedAttribute($value)
    {
        return $this->families->implode('title', ', ');
    }

    public function getSizesSelectedAttribute($value)
    {
        return $this->sizes->implode('title', ', ');
    }

    public function getDatasheetSelectedAttribute($value)
    {
        if($this->file('datasheet', 'fr') != '') {
            return '<i class="fa fa-check-circle text-ok"></i>';
        } else return '<span class="text-nope">-</span>';
    }

    public function getCerfileSelectedAttribute($value)
    {
        if($this->certificates->count() > 0) {
            return '<i class="fa fa-check-circle text-ok"></i>';
        } else return '-';
    }

    // public function getSearchResult(): SearchResult
    // {
    //     $url = route('site.home', ['locale' => app()->getLocale(), 'bike' => $this->slug]);

    //     return new SearchResult($this, $this->title, $url);
    // }

}
