<?php

namespace App\Http\Controllers\Asset\Admin;

use App\Models\Asset;
use App\Http\Controllers\Controller;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
   use Excel;

    protected string $tableClass = Asset::class;
}
