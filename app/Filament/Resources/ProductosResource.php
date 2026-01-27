<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductosResource\Pages;
use App\Filament\Resources\ProductosResource\RelationManagers;
use App\Models\Categoria;
use App\Models\Producto;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductosResource extends Resource
{
    protected static ?string $model = Producto::class;

    //Group
     protected static ?string $navigationGroup = 'Datos Productos';
    //Icon - Label
    protected static ?string $navigationIcon = 'heroicon-s-truck';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('prod_name')
                ->label('Nombre')
                ->required(),

                Textarea::make('prod_description')
                ->autosize()
                ->label('Descripción'),

                FileUpload::make('prod_image_url')
                ->disk('public')
                ->directory('imagenes_productos')
                ->visibility('public')
                ->image()
                ->preserveFilenames()
                ->label('Imagen'),

                TextInput::make('prod_precio')
                ->mask(RawJs::make('$money($input)'))
                ->stripCharacters(',')
                ->numeric()
                ->nullable()
                ->label('Precio')
                ->helperText('Dejar vacío para cotizar'),

                Select::make('categoria_id')
                ->label('Categoria')
                ->relationship('categoria','cat_name')
                ->required()

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('prod_name')->label('Nombre')
                ->searchable(),

                TextColumn::make('prod_description')
                ->label('Descripción'),

                ImageColumn::make('prod_image_url')
                ->disk('public')
                ->visibility('public')
                ->label('Imagen')
                ->width(100)
                ->height(100),

                TextColumn::make('prod_precio')
                ->label('Precio')
                ->money('MXN')
                ->sortable(),

                TextColumn::make('categoria.cat_name')
                ->label('Categoria')
                ->sortable()
                ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductos::route('/'),
            'create' => Pages\CreateProductos::route('/create'),
            'edit' => Pages\EditProductos::route('/{record}/edit'),
        ];
    }
}
