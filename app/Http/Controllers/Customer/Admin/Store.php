<?php

namespace App\Http\Controllers\Customer\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCustomerRequest;
use App\Models\Customer;

class Store extends Controller
{
  
    public function __invoke(ValidateCustomerRequest $request, Customer $customer)
    {
        $customer->fill($request->validated())->save();

        return [
            'message' => __('The customer was successfully created'),
            'redirect' => 'customer.edit',
            'param' => ['customer' => $customer->customer_id],
        ];
    }
}
