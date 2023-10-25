<?php

namespace App\Forms\Builders;

use App\Models\Company;
use LaravelLiberu\Forms\Services\Form;

class ProductForm
{
    protected const TemplatePath = __DIR__.'/../Templates/companu.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Company $company)
    {
        return $this->form->edit($company);
    }

   
}
