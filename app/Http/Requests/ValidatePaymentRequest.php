<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePaymentRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        $this->route('payment');

        return [
            'invoice_id' => 'required', 'exists:invoices,invoice_id',
            'payment_date' => 'required', 'date',
            'payment_amount' => 'required', 'numeric',
        ];
    }
}
