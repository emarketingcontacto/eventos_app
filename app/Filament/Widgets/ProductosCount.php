<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Producto;

class ProductosCount extends BaseWidget
{
    protected static ?int $sort = 2; //orden
    protected static ?int $columns = 4; //ancho

    protected function getStats(): array
    {
        return [
             // Total de Inflables
            Stat::make('Total Inflables', Producto::whereHas('categoria', function ($query) {
                $query->where('cat_name', 'Inflables');
            })->count()) // <--- Cambiamos get() por count()
            ->description('Total Inflables')
            ->descriptionIcon('heroicon-s-star')
            ->color('info'),

            // Total de Carpas
            Stat::make('Total Carpas', Producto::whereHas('categoria', function ($query) {
                $query->where('cat_name', 'Carpas');
            })->count()) // <--- Cambiamos get() por count()
            ->description('Total Carpas')
            ->descriptionIcon('heroicon-s-star')
            ->color('info'),

            // Total de Mobiliario
            Stat::make('Total Mobiliario', Producto::whereHas('categoria', function ($query) {
                $query->where('cat_name', 'Mobiliario');
            })->count()) // <--- Cambiamos get() por count()
            ->description('Total Mobiliario')
            ->descriptionIcon('heroicon-s-star')
            ->color('info'),

            // Total de Rokolas
            Stat::make('Total Rokolas', Producto::whereHas('categoria', function ($query) {
                $query->where('cat_name', 'Rokolas');
            })->count()) // <--- Cambiamos get() por count()
            ->description('Total Rokolas')
            ->descriptionIcon('heroicon-s-star')
            ->color('info')
        ];
    }
}
