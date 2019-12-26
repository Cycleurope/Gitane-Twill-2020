<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class MessageController extends ModuleController
{
    protected $moduleName = 'messages';

    protected $indexOptions = [
        'create' => false,
        'publish' => false,
        'bulkPublish' => false,
        'feature' => false,
        'edit' => true,
    ];
    
    protected $indexColumns = [
        'title' => [
            'title' => 'Message',
            'field' => 'title',
        ],
        'author_selected' => [
            'title' => 'Auteur',
            'field' => 'author_selected'
        ],
        'status' => [
            'title' => 'Statut',
            'field' => 'status',
        ] 
    ];
}
