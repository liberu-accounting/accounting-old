<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSupplierRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        $this->route('supplier');

        return [
            'payment_term_id' => 'required|exists:payment_terms,payment_term_id',
            'supplier_first_name' => 'required|min:3|max:50',
            'supplier_last_name' => 'required|min:3|max:50',
            'supplier_email' => 'required|email|unique:suppliers,supplier_email',
            'supplier_address' => 'required|min:3|max:50',
            'supplier_phone_number' => 'required|numeric'
        ];
    }
}
