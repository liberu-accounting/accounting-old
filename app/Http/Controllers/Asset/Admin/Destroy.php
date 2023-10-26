<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;

class Destroy extends Controller
{
    public function __invoke(Asset $asset)
    {
        $asset->delete();

        return [
            'message' => __('The asset was successfully deleted'),
            'redirect' => 'asset.admin.index',
        ];
        
    }
}
