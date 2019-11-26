<?php

namespace App\Repositories  ;

use A17\Twill\Repositories\Behaviors\HandleTranslations  ;
use A17\Twill\Repositories\Behaviors\HandleMedias  ;
use A17\Twill\Repositories\ModuleRepository  ;
use App\Models\Accessory  ;

class AccessoryRepository extends ModuleRepository
{
    use HandleTranslations , HandleMedias  ;

    public function __construct(Accessory $model)
    {
        $this->model = $model  ;
    }
}
