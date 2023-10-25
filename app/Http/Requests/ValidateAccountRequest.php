<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAccountRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $this->route('account');

        return [
            'user_id' => 'required|exists:users,id',
            'account_number' => 'required|unique:accounts,account_number',
            'account_name' => 'required|unique:accounts,account_name',
            'account_type' => 'required',
            'balance' => 'required'
        ];
    }
}
