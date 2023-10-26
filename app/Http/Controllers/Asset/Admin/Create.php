<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Forms\Builders\AssetForm;
use App\Http\Controllers\Controller;
use App\Models\Asset;

class Create extends Controller
{
    public function __invoke(Asset $asset, AssetForm $form)
    {
        return ['form' => $form->create($asset)];
    }
    
}
