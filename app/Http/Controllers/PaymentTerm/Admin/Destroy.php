<?php

namespace App\Http\Controllers\PaymentTerm\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentTerm;

class Destroy extends Controller
{
    public function __invoke(PaymentTerm $paymentTerm)
    {
        $paymentTerm->delete();

        return ['message' => __('The payment term was successfully deleted')];   
    }
}
