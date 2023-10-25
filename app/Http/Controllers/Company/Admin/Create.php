<?php

namespace App\Http\Controllers\Company\Admin;

use App\Forms\Builders\CompanyForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    public function __invoke(CompanyForm $form)
    {
        return ['form' => $form->create()];
    }
}
