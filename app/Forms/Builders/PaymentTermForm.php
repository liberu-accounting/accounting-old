<?php

namespace App\Forms\Builders;

use App\Models\PaymentTerm;
use LaravelLiberu\Forms\Services\Form;

class PaymentTermForm
{
    protected const TemplatePath = __DIR__.'/../Templates/paymentTerm.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(PaymentTerm $paymentTerm)
    {
        return $this->form->edit($paymentTerm);
    }

   
}
