<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Forms\Builders\AssetAcquisitionForm;
use App\Http\Controllers\Controller;
use App\Models\AssetAcquisition;

class Edit extends Controller
{
    public function __invoke(AssetAcquisition $assetAcquisition, AssetAcquisitionForm $form)
    {
        return ['form' => $form->edit($assetAcquisition)];
    }
   
}
