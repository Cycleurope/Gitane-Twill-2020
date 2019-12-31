<?php

namespace App\Models  ;

use A17\Twill\Models\Behaviors\HasTranslation  ;
use A17\Twill\Models\Behaviors\HasMedias  ;
use A17\Twill\Models\Behaviors\HasPosition  ;
use A17\Twill\Models\Behaviors\Sortable  ;
use A17\Twill\Models\Model  ;

class Slide extends Model
{
    use HasTranslation , HasMedias  ;

    protected $fillable = [
        'published' ,
        'title' ,
        'target_blank',
        // 'featured' ;
        // 'publish_start_date' ;
        // 'publish_end_date' ;
    ]  ;

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = [
        'title' ,
        'active' ,
        'subheading',
        'link',
        'label',
    ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ]  ;

    public $mediasParams = [
        'desktop_slide' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 1800 / 900 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
        'tablet_slide' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 1200 / 800 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
        'square_slide' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 800 / 800 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
        'mobile_slide' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default' , // ratio name , same as crop name if single
                    'ratio' => 800 / 1200 , // ratio as a fraction or number
                ] ,
            ] ,
        ] ,
    ]  ;
}
