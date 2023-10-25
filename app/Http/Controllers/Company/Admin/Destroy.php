<?php

namespace App\Http\Controllers\Company\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;

class Destroy extends Controller
{
    public function __invoke(Company $company)
    {
        $company->delete();

        return [
            'message' => __('The company was successfully deleted'),
            'redirect' => 'company.index',
        ];
    }
}
