<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Forms\Builders\AssetAcquisitionForm;
use App\Http\Controllers\Controller;
use App\Models\AssetAcquisition;

class Create extends Controller
{
  
    public function __invoke(AssetAcquisitionForm $form, AssetAcquisition $assetAcquisition)
    {
        return ['form' => $form->create($assetAcquisition)];
    }
   
}
