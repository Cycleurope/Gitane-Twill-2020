<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class CertificateController extends ModuleController
{
    protected $moduleName = 'certificates';

    protected $perPage = 10;
}
