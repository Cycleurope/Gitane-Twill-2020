<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Country;

class CountryRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Country $model)
    {
        $this->model = $model;
    }
}
