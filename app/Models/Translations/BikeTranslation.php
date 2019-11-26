<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class BikeTranslation extends Model
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
    ];
}
