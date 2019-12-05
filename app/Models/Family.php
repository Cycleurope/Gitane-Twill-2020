<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Family extends Model implements Sortable
{
    use HasTranslation, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'desktop_cover',
        'tablet_cover',
        'mobile_cover',
        'position',
        'featured',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = [
        'title',
    ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'desktop_cover' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 1800 / 360,
                ],
            ],
        ],
        'tablet_cover' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 1200 / 600,
                ],
            ],
        ],
        'mobile_cover' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 900 / 600,
                ],
            ],
        ],
        'tile' => [
            'default' => [
                [
                    'name' => 'desktop',
                    'ratio' => 900 / 600,
                ]
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 800 / 400,
                ]
            ],
        ]
    ];

    public function bikes()
    {
        return $this->belongsToMany(Bike::class);
    }
}
