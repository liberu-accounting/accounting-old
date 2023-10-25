<?php

namespace App\Http\Controllers\Company\Admin;

use App\Http\Controllers\Controller;
use App\Forms\Builders\CompanyForm;
use App\Models\Company;

class Edit extends Controller
{
    public function __invoke(Company $company, CompanyForm $form)
    {
        return ['form' => $form->edit($company)];
    }
}
