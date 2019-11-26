<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation  ;
use A17\Twill\Models\Behaviors\HasMedias  ;
use A17\Twill\Models\Model  ;

class Color extends Model 
{
    use HasTranslation, HasMedias  ;

    protected $fillable = [
        'published' ,
        'title' ,
        'position' ,
    ]  ;

    public $translatedAttributes = [
        'title' ,
        'color' ,
        'decal' ,
    ]  ;
    
    // uncomment and modify this as needed if you use the HasSlug trait
    // public $slugAttributes = [
    //     'title' ;
    // ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ]  ;

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'color_picture' => [
            'default' => [
                [
                    'name' => 'landscape' ,
                    'ratio' => 1 / 1 ,
                ] ,
            ] ,
        ] ,
    ] ;
}
