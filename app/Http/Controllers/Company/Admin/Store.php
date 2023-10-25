<?php

namespace App\Http\Controllers\Company\Admin;

use App\Models\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCompanyRequest;

class Store extends Controller
{
    public function __invoke(ValidateCompanyRequest $request, Company $company)
    {
       $company->fill($request->validated())->save();

        return [
            'message' => __('The company was successfully created'),
            'redirect' => 'company.edit',
            'param' => ['company' => $company->company_id],
        ];
    }
   
}
