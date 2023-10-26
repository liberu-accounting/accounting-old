<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Forms\Builders\SupplierForm;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

class Edit extends Controller
{
    public function __invoke(Supplier $supplier, SupplierForm $form)
    {
        return ['form' => $form->edit($supplier)];
    }
    
}
