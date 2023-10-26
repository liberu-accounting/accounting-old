<?php

namespace App\Http\Controllers\Acquisition\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssetAcquisition;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
   use Excel;

   protected string $tableClass = AssetAcquisition::class;
}
