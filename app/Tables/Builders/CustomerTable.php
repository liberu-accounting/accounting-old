<?php

namespace App\Tables\Builders;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class CustomerTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/customer.json';

    public function query(): Builder
    {
        return Customer::selectRaw(
            '
            customers.id, customers.customer_name, customers.last_name, customers.customer_address, customers.customer_email,
            customers.customer_phone, customers.customer_city'
        );
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
