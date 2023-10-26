<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssetAcquisition;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Request $request, AssetAcquisition $assetAcquisition)
    {
        $query = AssetAcquisition::query();

        if ($request->has('search')) {
            $query->where('asset_acquisition_id', 'like', '%' . $request->search . '%')
                ->orWhere('acquisition_date', 'like', '%' . $request->search . '%')
                ->orWhere('acquisition_price', 'like', '%' . $request->search . '%');
        }

        $assetAcquisition = $query->paginate(10);

        return [
            'assetAcquisition' => $assetAcquisition
        ];
    }
}
