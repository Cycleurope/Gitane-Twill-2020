<?php

namespace App\Models;

use A17\Twill\Models\Model;

class Message extends Model 
{

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'address',
        'postalcode',
        'city',
        'message',
        'status',
    ];

}
