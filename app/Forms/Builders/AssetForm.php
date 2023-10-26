<?php

namespace App\Forms\Builders;

use App\Models\Asset;
use LaravelLiberu\Forms\Services\Form;

class AssetForm
{
    protected const TemplatePath = __DIR__.'/../Templates/asset.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Asset $asset)
    {
        return $this->form->edit($asset);
    }

   
}
