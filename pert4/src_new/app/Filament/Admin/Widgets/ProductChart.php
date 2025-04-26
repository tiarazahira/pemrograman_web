<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product;

class ProductChart extends BaseWidget
{
    protected function getStats(): array
    {
        $totalProducts = Product::count();
        return [
            Stat::make('Total Product', $totalProducts)
                ->description('Total Product')
                ->color('danger')
                ->chart([2, 4, 3, 5, 4, 6, 5])
                ->icon('heroicon-o-briefcase')
        ];
    }
}
