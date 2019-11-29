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

    public function afterSave($object , $fields)
    {
        $this->updateBrowser($object , $fields ,'countries')  ;
        parent::afterSave($object , $fields)  ;
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object)  ;
        $fields['browsers']['countries'] = $this->getFormFieldsForBrowser($object , 'countries')  ;
        return $fields  ;
    }
}
