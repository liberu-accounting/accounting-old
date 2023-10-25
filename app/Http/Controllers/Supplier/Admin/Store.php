<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateSupplierRequest;
use App\Models\Supplier;

class Store extends Controller
{
   
    public function __invoke(ValidateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->fill($request->validated())->save();
        
        return [
            'message' => __('The supplier was successfully created'),
            'redirect' => 'supplier.edit',
            'param' => ['supplier' => $supplier->supplier_id],

    ];
    }
   
}
