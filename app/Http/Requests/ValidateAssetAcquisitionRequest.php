<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAssetAcquisitionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('asset-acquisition');

        return [
            'asset_id' => 'required|integer|exists:assets,asset_id',
            'acquisition_date' => 'required|date',
            'acquisition_price' => 'required|numeric',
        ];
    }
}
