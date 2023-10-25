<?php

namespace App\Tables\Builders;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class InvoiceTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/invoice.json';

    public function query(): Builder   
    {
        return Invoice::selectRaw('
            invoices.id, invoices.customer_id, invoices.invoice_date,
            invoices.total_amount, invoices.payment_status
        ');
    }
    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
