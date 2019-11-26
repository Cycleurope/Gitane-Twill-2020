<?php

namespace App\Models  ;

use A17\Twill\Models\Model  ;

class Size extends Model 
{
    protected $fillable = [
        'published' ,
        'title' ,
        'size_muber' ,
        'size_char' ,
    ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ]  ;

    public function bikes()
    {
        return $this->belongsToMany(Bike::class)  ;
    }
}
