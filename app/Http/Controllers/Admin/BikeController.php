<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class BikeController extends ModuleController
{
    protected $moduleName = 'bikes';


    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'families_selected' => [
            'title' => 'Famille',
            'field' => 'families_selected'
        ],
        'sizes_selected' => [
            'title' => 'Tailles',
            'field' => 'sizes_selected'
        ]
    ];
}
