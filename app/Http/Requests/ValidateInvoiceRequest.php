<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        $this->route('invoice');

        return [
            'customer_id' => 'required|exists:customers,customer_id',
            'invoice_date' => 'required',
            'total_amount' => 'required',
            'invoice_payment_status' => 'required|in:paid,unpaid'
        ];
    }
}
