<?php

namespace App\Http\Controllers\Company\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;

class Show extends Controller
{
   
    public function __invoke(Company $company)
    {
        return ['company' => $company];
    }
}
