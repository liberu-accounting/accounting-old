<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Forms\Builders\SupplierForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    public function __invoke(SupplierForm $form)
    {
        return ['form' => $form->create()];
    }
   
}
