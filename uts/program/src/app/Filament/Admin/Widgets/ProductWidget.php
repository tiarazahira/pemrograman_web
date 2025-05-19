<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Colors\Color;

class ProductWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Bunga Potong', Product::where('jenis_bunga', 'potong')->count())
                ->description('Jumlah bunga potong yang tersedia')
                ->descriptionIcon('heroicon-m-scissors')
                ->color('info'),

            Stat::make('Bunga Hias', Product::where('jenis_bunga', 'hias')->count())
                ->description('Total stok bunga hias')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('success'),

            Stat::make('Bunga Kering', Product::where('jenis_bunga', 'kering')->count())
                ->description('Koleksi bunga kering')
                ->descriptionIcon('heroicon-m-sun')
                ->color('warning'),

            Stat::make('Bouquet', Product::where('jenis_bunga', 'bouquet')->count())
                ->description('Jumlah bouquet yang tersedia')
                ->descriptionIcon('heroicon-m-gift')
                ->color('primary'),
        ];
    }
}
