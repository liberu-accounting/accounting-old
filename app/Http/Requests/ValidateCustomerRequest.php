<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCustomerRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        $this->route('customer');

        return [
            'customer_name' => 'required',
            'customer_last_name' => 'required',
            'customer_address' => 'required',
            'customer_email' => 'required|unique:customers,customer_email',
            'customer_phone' => 'required|unique:customers,customer_phone',
            'customer_city' => 'required'
        ];
    }
}
