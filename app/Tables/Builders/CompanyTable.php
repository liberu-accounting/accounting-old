<?php

namespace App\Tables\Builders;

use App\Models\Company;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class CompanyTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/company.json';

    public function query(): Builder
    {
        return Company::selectRaw('
            companies.company_id, companies.company_name, companies.company_address, companies.company_email, 
            companies.company_phone, companies.company_city, companies.company_tin, companies.company_logo
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
