<?php

namespace App\Models  ;

use A17\Twill\Models\Behaviors\HasBlocks  ;
use A17\Twill\Models\Behaviors\HasMedias  ;
use A17\Twill\Models\Model  ;

class Geometry extends Model 
{
    use HasMedias, HasBlocks;

    protected $fillable = [
        'published',
        'title' ,
    ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ]  ;

    // uncomment and modify this as needed if you use the HasMedias trait
    // public $mediasParams = [
    //     'cover' => [
    //         'default' => [
    //             [
    //                 'name' => 'landscape' ;
    //                 'ratio' => 16 / 9 ;
    //             ] ;
    //             [
    //                 'name' => 'portrait' ;
    //                 'ratio' => 3 / 4 ;
    //             ] ;
    //         ] ;
    //         'mobile' => [
    //             [
    //                 'name' => 'mobile' ;
    //                 'ratio' => 1 ;
    //             ] ;
    //         ] ;
    //     ] ;
    // ]  ;
}
