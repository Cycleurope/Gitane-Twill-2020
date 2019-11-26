<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class AccessoryTranslation extends Model
{
    protected $fillable = [
        'title',
        'name',
        'description',
        'active',
        'locale',
    ];
}
