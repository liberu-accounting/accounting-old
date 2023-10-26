<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAssetRequest;

class Update extends Controller
{
    public function __invoke(ValidateAssetRequest $request, $asset)
    {
        $asset->update($request->validated());

        return [
            'message' => __('The asset was successfully updated'),
            'redirect' => 'asset.admin.edit',
            'param' => ['asset' => $asset->asset_id],
        ];
    }
}
