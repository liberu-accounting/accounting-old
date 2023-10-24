<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTransactionRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        $this->route('transaction');

        return [
            'customer_id' => 'required|exists:customers,customer_id',
            'transaction_date' => 'required',
            'transaction_description' => 'required',
            'amount' => 'required',
            'debit_account_id' => 'required',
            'credit_account_id' => 'required'
        ];
    }
}
