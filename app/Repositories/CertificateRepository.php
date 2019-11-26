<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Certificate;

class CertificateRepository extends ModuleRepository
{
    use HandleMedias, HandleFiles;

    public function __construct(Certificate $model)
    {
        $this->model = $model;
    }

    public function afterSave($object , $fields)
    {
        $this->updateBrowser($object , $fields ,'bikes')  ;
        parent::afterSave($object , $fields)  ;
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object)  ;
        $fields['browsers']['bikes'] = $this->getFormFieldsForBrowser($object , 'bikes')  ;
        return $fields  ;
    }
}
