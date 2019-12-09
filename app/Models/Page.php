<?php

namespace App\Models  ;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Page extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'desktop_cover',
        'tablet_cover',
        'mobile_cover',
        'title',
        'description',
        'position',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'content',
    ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = [
        'title' ,
    ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'desktop',
                    'ratio' => 1800 / 540,
                ],
                [
                    'name' => 'tablet',
                    'ratio' => 1800 / 800,
                ],
                [
                    'name' => 'mobile',
                    'ratio' => 800 / 600,
                ],
            ],
        ],
    ];
}
