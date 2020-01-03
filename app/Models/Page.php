<?php

namespace App\Models  ;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Page extends Model implements Searchable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias;

    protected $fillable = [
        'published',
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
        'meta_description', 'meta_keywords',
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
                    'name' => 'default',
                    'ratio' => 1800/540
                ],
            ],
            'mobile' => [
                [
                    'name' => 'landscape',
                    'ratio' => 800 / 500,
                ],
            ]
        ],
    ];

    public function getSearchResult(): SearchResult
    {
        
        $url = route('site.bike.show', $this->id);

        return new SearchResult($this, $this->title, $url);

    }
    
}
