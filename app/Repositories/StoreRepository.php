<?php

namespace App\Repositories  ;

use A17\Twill\Repositories\Behaviors\HandleMedias  ;
use A17\Twill\Repositories\ModuleRepository  ;
use App\Models\Store  ;

class StoreRepository extends ModuleRepository
{
    use HandleMedias  ;

    public function __construct(Store $model)
    {
        $this->model = $model  ;
    }
}
