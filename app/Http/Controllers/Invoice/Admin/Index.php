<?php

namespace App\Http\Controllers\Invoice\Admin;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Index extends Controller
{
    public function __invoke(Request $request)
    {
        $query = Invoice::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('invoice_date', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('total_amount', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('payment_status', 'LIKE', '%' . $searchTerm . '%');
        }

        $invoice = $query->paginate(10);

        return [
            'invoice' => $invoice
        ];
    }
}
