<?php

namespace App\Repositories  ;

use A17\Twill\Repositories\Behaviors\HandleBlocks  ;
use A17\Twill\Repositories\Behaviors\HandleTranslations  ;
use A17\Twill\Repositories\Behaviors\HandleSlugs  ;
use A17\Twill\Repositories\Behaviors\HandleMedias  ;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository  ;
use App\Models\Bike  ;

class BikeRepository extends ModuleRepository
{
    use HandleBlocks , HandleTranslations , HandleSlugs , HandleFiles, HandleMedias  ;

    public function __construct(Bike $model)
    {
        $this->model = $model  ;
    }

    public function afterSave($object , $fields)
    {
        $this->updateBrowser($object , $fields ,'families')  ;
        $this->updateBrowser($object , $fields , 'sizes')  ;
        $this->updateBrowser($object , $fields , 'colors')  ;
        $this->updateBrowser($object , $fields , 'accessories')  ;
        $this->updateBrowser($object , $fields , 'geometries')  ;
        parent::afterSave($object , $fields)  ;
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object)  ;
        $fields['browsers']['families'] = $this->getFormFieldsForBrowser($object , 'families')  ;
        $fields['browsers']['sizes'] = $this->getFormFieldsForBrowser($object , 'sizes')  ;
        $fields['browsers']['colors'] = $this->getFormFieldsForBrowser($object , 'colors')  ;
        $fields['browsers']['accessories'] = $this->getFormFieldsForBrowser($object , 'accessories')  ;
        $fields['browsers']['geometries'] = $this->getFormFieldsForBrowser($object , 'geometries')  ;
        return $fields  ;
    }
}
