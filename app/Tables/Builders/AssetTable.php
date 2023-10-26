<?php

namespace App\Tables\Builders;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class AssetTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/asset.json';

    public function query(): Builder
    {
        return Asset::selectRaw('
            assets.asset_id,
            assets.asset_name,
            assets.asset_cost,
            assets.useful_life_years
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
