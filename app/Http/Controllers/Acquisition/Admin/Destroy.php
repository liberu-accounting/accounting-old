<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssetAcquisition;

class Destroy extends Controller
{

    public function __invoke(AssetAcquisition $assetAcquisition)
    {
        $assetAcquisition->delete();

        return [
            'message' => __('The asset acquisition was successfully deleted'),
            'redirect' => 'acquisition.admin.index',
        ];
    }
}
