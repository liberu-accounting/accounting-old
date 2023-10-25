<?php

namespace App\Http\Controllers\Customer\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCustomerRequest;
use App\Models\Customer;

class Update extends Controller
{
    public function __invoke(ValidateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return ['message' => __('The customer was successfully updated')];
    }
}
