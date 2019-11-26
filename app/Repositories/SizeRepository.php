<?php

namespace App\Repositories  ;

use A17\Twill\Repositories\ModuleRepository  ;
use App\Models\Size  ;

class SizeRepository extends ModuleRepository
{
    public function __construct(Size $model)
    {
        $this->model = $model  ;
    }
}
