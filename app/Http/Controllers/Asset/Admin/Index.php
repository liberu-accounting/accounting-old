<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Asset $asset, Request $request)
    {
        $query = Asset::query();

        if ($request->has('search')) {
            $query->where('asset_id', 'like', '%' . $request->search . '%')
                ->orWhere('asset_name', 'like', '%' . $request->search . '%')
                ->orWhere('asset_cost', 'like', '%' . $request->search . '%');
        }

        $asset = $query->paginate(10);

        return [
            'asset' => $asset
        ];
    }
}
