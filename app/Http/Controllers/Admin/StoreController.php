<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CountryRepository;
use A17\Twill\Http\Controllers\Admin\ModuleController;

class StoreController extends ModuleController
{
    protected $moduleName = 'stores';

    protected $formWith = [
        'countries'
    ];

    protected function formData($request)
    {
        return [
            'countriesList' => app(CountryRepository::class)->listAll()
        ];
    }
}
