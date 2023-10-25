<?php

namespace App\Http\Controllers\Payment\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePaymentRequest;
use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;

class Store extends Controller
{

    public function __invoke(ValidatePaymentRequest $request, Payment $payment)
    {
        $payment->fill($request->validated())->save();

        $invoice = Invoice::find($request->invoice_id);
        $invoice->payment_status = 'paid';
        $invoice->save();

        return [
            'message' => 'Payment has been created successfully',
            'data' => $payment
        ];
    }
}
