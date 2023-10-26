<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAssetAcquisitionRequest;
use App\Models\AssetAcquisition;

class Store extends Controller
{
    public function __invoke(ValidateAssetAcquisitionRequest $request, AssetAcquisition $assetAcquisition)
    {
        $assetAcquisition->fill($request->validated())->save();

        return [
            'message' => __('The asset acquisition was successfully created'),
            'redirect' => 'acquisition.admin.edit',
            'param' => ['asset' => $assetAcquisition->asset_acquisition_id],
        ];
    }
}
