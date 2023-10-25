<?php

namespace App\Tables\Builders;


use App\Models\Supplier;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class SupplierTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/product.json';

    public function query(): Builder
    {
        return Supplier::selectRaw(
            '
            suppliers.supplier_id, suppliers.supplier_first_name, 
            suppliers.supplier_last_name, 
            suppliers.supplier_email, suppliers.supplier_address, 
            suppliers.supplier_phone_number, 
            suppliers.supplier_limit_credit, suppliers.supplier_tin'
        );
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
