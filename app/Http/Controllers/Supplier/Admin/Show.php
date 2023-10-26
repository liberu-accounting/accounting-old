<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class Show extends Controller
{
    
    public function __invoke(Supplier $supplier)
    {
        return ['supplier' => $supplier];
    }
}
