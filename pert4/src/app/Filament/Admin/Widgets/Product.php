<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product as ModelsProduct;

class Product extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total of Product', ModelsProduct::count())
                ->description('Total')
                ->color('danger')
                ->icon('heroicon-o-shopping-bag'),
        ];
    }
}
