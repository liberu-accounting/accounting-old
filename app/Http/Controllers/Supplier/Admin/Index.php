<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Supplier $supplier, Request $request)
    {
        $query = Supplier::query();

        if ($request->has('search')) {
            $query->where('supplier_name', 'like', '%' . $request->search . '%')
                ->orWhere('supplier_address', 'like', '%' . $request->search . '%')
                ->orWhere('supplier_phone', 'like', '%' . $request->search . '%')
                ->orWhere('supplier_email', 'like', '%' . $request->search . '%');
        }

        $supplier = $query->paginate(10);

        return [
            'suppliers' => $supplier
        ];
    }
}
