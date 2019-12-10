<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Country extends Model 
{
    use HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'description',
        // 'position',
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    // public $slugAttributes = [
    //     'title',
    // ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    public function bikes()
    {
        return $this->belongsToMany(Bike::class);
    }
}
