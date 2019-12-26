<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Message;

class MessageRepository extends ModuleRepository
{
    

    public function __construct(Message $model)
    {
        $this->model = $model;
    }
}
