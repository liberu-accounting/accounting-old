<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Http\Requests\ValidateAssetRequest;

class Store extends Controller
{
    public function __invoke(ValidateAssetRequest $request, Asset $asset)
    {
        $asset->fill($request->validated())->save();

        return [
            'message' => __('The asset was successfully created'),
            'redirect' => 'asset.admin.edit',
            'param' => ['asset' => $asset->asset_id],
        ];
    }
}
