<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePaymentTermRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('payment_term');

        return [
            'payment_term_name' => 'required|min:3|max:50',
            'payment_term_description' => 'required|min:3|max:50',
            'payment_term_number_of_days' => 'required|numeric',
            'payment_term_status' => 'required|in:active,inactive,pending'
        ];
    }
}
