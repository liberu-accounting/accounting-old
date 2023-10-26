<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssetAcquisition;

class Show extends Controller
{
    public function __invoke(AssetAcquisition $assetAcquisition)
    {
        return ['assetAcquisition' => $assetAcquisition];  
    }
}
