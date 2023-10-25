<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCompanyRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('company');

        return [
            'company_name' => 'required|string|max:255',
            'company_address' => 'required|string|max:255',
            'company_email' => 'required|email|unique:companies,company_email',
            'company_phone' => 'required|numeric|min:10',
            'company_city' => 'required|string|max:255',
            'company_tin' => 'required|numeric',
            'company_logo' => 'required| mimes:jpg,jpeg,png,webp',
        ];
    }
}
