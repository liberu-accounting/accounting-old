<?php

namespace App\Forms\Builders;

use App\Models\Supplier;
use LaravelLiberu\Forms\Services\Form;

class ProductCategoryForm
{
    protected const TemplatePath = __DIR__.'/../Templates/supplier.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Supplier $supplier)
    {
        return $this->form->edit($supplier);
    }

   
}
