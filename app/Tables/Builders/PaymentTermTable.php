<?php

namespace App\Tables\Builders;

use App\Models\PaymentTerm;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class PaymentTermTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/payment_term.json';

    public function query(): Builder
    {
        return PaymentTerm::selectRaw('
            payment_terms.payment_term_id, payment_terms.payment_term_name,
            payment_terms.payment_term_description, payment_terms.payment_term_number_of_days,  
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
