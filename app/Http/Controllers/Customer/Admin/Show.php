<?php

namespace App\Http\Controllers\Product\Admin;

use App\Models\Customer;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Customer $customer)
    {
        return ['customer' => $customer];
    }
}
