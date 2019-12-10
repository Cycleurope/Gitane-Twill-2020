<?php

namespace App\Models;

use A17\Twill\Models\Model;

class Country extends Model 
{
    protected $fillable = [
        'published' ,
        'title' ,
        'alpha2' ,
        'alpha3' ,
    ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class)  ;
    }
}
