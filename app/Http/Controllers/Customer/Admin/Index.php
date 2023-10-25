<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Customer $customer, Request $request)
    {
        $query = Customer::query();

        if ($request->has('search')) {
            $query->where('first_name', 'like', '%' . $request->search . '%');
        }

        $customer = $query->paginate(10);

        return [
            'products' => $customer
        ];
    }
    
}
