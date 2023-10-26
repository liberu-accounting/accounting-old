<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Models\Supplier;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateSupplierRequest;

class Update extends Controller
{
    public function __invoke(ValidateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->validated());

        return [
            'message' => __('The supplier was successfully updated'),
            'redirect' => 'supplier.edit',
            'param' => ['supplier' => $supplier->supplier_id],
        ];
    }
}
