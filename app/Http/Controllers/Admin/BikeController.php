<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class BikeController extends ModuleController
{
    protected $moduleName = 'bikes';

    protected $perPage = 20;
    protected $defaultOrders = ['title' => 'desc'];
    protected $indexWith = ['families'];

    protected $indexColumns = [
        'gallery' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'gallery',
                'crop' => 'default',
            ],
        ],
        'title' => [ // field column
            'title' => 'Title',
            'field' => 'title',
        ],
        'families' => [ // relation column
            'title' => 'Famille',
            'field' => 'families_selected',
        ],
        'colors' => [ // relation column
            'title' => 'Couleurs',
            'field' => 'colors_count',
        ],
        'sizes' => [ // relation column
            'title' => 'Tailles',
            'field' => 'sizes_count',
        ],
        'public_price' => [ // relation column
            'title' => 'Prix Public',
            'field' => 'public_price_selected',
        ],
    ];
    
}
