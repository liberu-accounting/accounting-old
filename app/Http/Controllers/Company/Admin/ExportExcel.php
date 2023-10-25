<?php

namespace App\Http\Controllers\Company\Admin;

use App\Http\Controllers\Controller;
use App\Tables\Builders\CompanyTable;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
   use Excel;

   protected string $tableClass = CompanyTable::class;

   
}
