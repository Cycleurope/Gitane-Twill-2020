<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Geometry;

class GeometryRepository extends ModuleRepository
{
    use HandleMedias, HandleBlocks;

    public function __construct(Geometry $model)
    {
        $this->model = $model;
    }
}
