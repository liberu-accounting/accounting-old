<?php

namespace App\Http\Controllers\PaymentTerm\Admin;

use App\Forms\Builders\PaymentTermForm;
use App\Http\Controllers\Controller;
use App\Models\PaymentTerm;

class Edit extends Controller
{
    public function __invoke(PaymentTermForm $form, PaymentTerm $paymentTerm)
    {
        return ['form' => $form->edit($paymentTerm)];
    }
    
}
