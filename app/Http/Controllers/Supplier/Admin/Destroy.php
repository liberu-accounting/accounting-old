<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class Destroy extends Controller
{
    public function __invoke(Supplier $supplier)
    {
        $supplier->delete();

        return [
            'message' => __('The supplier was successfully deleted'),
            'redirect' => 'supplier.index',
        ];
    }
}
