<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class FamilyTranslation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'active',
        'locale',
        'meta_description', 'meta_keywords',
    ];
}
