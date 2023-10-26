<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAssetRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('asset');

        return [
            'asset_name' => 'required|string',
            'asset_cost' => 'required|numeric',
            'useful_life_years' => 'required|integer',
        ];
    }
}
