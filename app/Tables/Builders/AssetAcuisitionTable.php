<?php

namespace App\Tables\Builders;

use App\Models\AssetAcquisition;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class AssetAcquisitionTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/asset_acquisition.json';

    public function query(): Builder
    {
        return AssetAcquisition::selectRaw('
            asset_acquisitions.asset_acquisition_id,
            asset_acquisitions.asset_id,
            asset_acquisitions.acquisition_date,
            asset_acquisitions.acquisition_price
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
