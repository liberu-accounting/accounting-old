<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Models\AssetAcquisition;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAssetAcquisitionRequest;


class Update extends Controller
{
    public function __invoke(ValidateAssetAcquisitionRequest $request, AssetAcquisition $assetAcquisition)
    {
        $assetAcquisition->update($request->validated());

        return [
            'message' => __('The asset acquisition was successfully updated'),
            'redirect' => 'acquisition.admin.edit',
            'param' => ['asset' => $assetAcquisition->asset_acquisition_id],
        ];
    }
}
