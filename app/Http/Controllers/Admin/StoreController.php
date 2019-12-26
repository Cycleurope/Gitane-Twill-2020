<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class StoreController extends ModuleController
{
    protected $moduleName = 'stores';

    protected $perPage = 10;

    protected $titleColumnKey = 'title';

    protected $indexWith = ['countries'];

    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'country_selected' => [
            'title' => 'Country',
            'field' => 'country_selected'
        ],
        'geolocated'=> [
            'title' => 'Geolocation',
            'field' => 'is_geolocated'
        ]
    ];
}
