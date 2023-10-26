<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;

class Show extends Controller
{
    public function __invoke(Asset $asset)
    {
        return ['asset' => $asset];
    }
}
