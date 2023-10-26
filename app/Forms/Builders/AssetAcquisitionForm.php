<?php

namespace App\Forms\Builders;

use App\Models\AssetAcquisition;
use LaravelLiberu\Forms\Services\Form;

class AssetAcquisitionForm
{
    protected const TemplatePath = __DIR__.'/../Templates/asset_acquisition.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(AssetAcquisition $assetAcquisition)
    {
        return $this->form->edit($assetAcquisition);
    }

   
}
