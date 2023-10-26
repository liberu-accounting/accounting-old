<?php

namespace App\Http\Controllers\PaymentTerm\Admin;

use App\Models\PaymentTerm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePaymentTermRequest;

class Update extends Controller
{
    public function __invoke(ValidatePaymentTermRequest $request, PaymentTerm $paymentTerm)
    {
        $paymentTerm->update($request->validated());

        return ['message' => __('The payment term was successfully updated')];
    }
}
