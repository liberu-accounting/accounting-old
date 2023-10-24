<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCategorieRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('categorie');

        return [
            'name' => 'required|unique:categories,name'
        ];
    }
}
