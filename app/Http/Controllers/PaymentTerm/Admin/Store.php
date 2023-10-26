<?php

namespace App\Http\Controllers\PaymentTerm\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePaymentTermRequest;
use App\Models\PaymentTerm;

class Store extends Controller
{
    public function __invoke(ValidatePaymentTermRequest $request, PaymentTerm $paymentTerm)
    {
        $paymentTerm->fill($request->validated())->save();

        return ['message' => __('The payment term was successfully created')];
    }
}
