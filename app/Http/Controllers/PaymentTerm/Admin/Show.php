<?php

namespace App\Http\Controllers\PaymentTerm\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentTerm;

class Show extends Controller
{
   
    public function __invoke(PaymentTerm $paymentTerm)
    {
        return ['paymentTerm' => $paymentTerm];
    }
}
