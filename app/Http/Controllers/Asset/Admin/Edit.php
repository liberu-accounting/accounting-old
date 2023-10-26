<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Forms\Builders\AssetForm;
use App\Http\Controllers\Controller;
use App\Models\Asset;

class Edit extends Controller
{
    public function __invoke(Asset $asset, AssetForm $form)
    {
        return ['form' => $form->edit($asset)];
    }
    
}
