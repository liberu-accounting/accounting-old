<?php

namespace App\Http\Controllers\Customer\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class Destroy extends Controller
{
    public function __invoke(Customer $customer)
    {
        $customer->delete();

        return [
            'message' => __('The customer was successfully deleted'),
            'redirect' => 'customer.index',
        ]; 
    }
}
