<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class BikeTranslation extends Model implements Searchable
{
    protected $fillable = [
        'title',
        'name', 'subname',
        'description',
        'frame', 'fork', 'rear_suspension',
        'engine', 'battery', 'display', 'distance_range', 'charger',
        'rims', 'hubs', 'tires',
        'shifters', 'rear_derailleur', 'front_derailleur', 'crankset', 'cassette',
        'saddle', 'seatpost', 'handlebars', 'stem', 'brakes',
        'mudguards', 'racks', 'chainguard', 'stand', 'lightings', 'transmission', 'plus',
        'active', 'pedals', 'transmission', 'plus',
        'locale',
        'meta_description', 'meta_keywords',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('site.bikes.show', ["locale" => app()->getLocale(), "slug" => $this->slug]);

        return new SearchResult($this, $this->title, $url);
    }
}
