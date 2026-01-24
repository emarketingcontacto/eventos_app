<?php

namespace App\Filament\Widgets;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Zona;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoriesCount extends BaseWidget
{
    protected static ?int $sort = 1; // Este aparecerá primero
    protected static ?int $columns = 3;

    protected function getStats(): array
    {
        return [
            //Total de Categorias
            Stat::make('Categorias', Categoria::count())
            ->description('Total Categorias Registradas')
            ->descriptionIcon('heroicon-s-square-3-stack-3d')
            ->color('warning'),

            //Total Productos
            Stat::make('Productos', Producto::count())
            ->description('Total Productos Registrados')
            ->descriptionIcon('heroicon-s-truck')
            ->color('success'),

            //Total Zonas
            Stat::make('Zonas', Zona::count())
            ->description('Total Zonas Cobertura')
            ->descriptionIcon('heroicon-s-map-pin')
            ->color('warning'),


        ];
    }
}
