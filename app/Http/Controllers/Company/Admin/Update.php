<?php

namespace App\Http\Controllers\Company\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCompanyRequest;
use App\Models\Company;

class Update extends Controller
{

    public function __invoke(ValidateCompanyRequest $request, Company $company)
    {
        $company->fill($request->validated())->save();

        return [
            'message' => __('The company was successfully updated'),
            'redirect' => 'company.edit',
            'param' => ['company' => $company->company_id],
        ];
    }
}
