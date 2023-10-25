<?php

namespace App\Http\Controllers\Supplier\Admin;

use App\Http\Controllers\Controller;
use App\Tables\Builders\SupplierTable;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
   use Excel;

   protected string $tableClass = SupplierTable::class;
}
