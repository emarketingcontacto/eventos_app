<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NegocioResource\Pages;
use App\Filament\Resources\NegocioResource\RelationManagers;
use App\Models\Negocio;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NegocioResource extends Resource
{
    protected static ?string $model = Negocio::class;

    //Group
     protected static ?string $navigationGroup = 'Datos del Negocio';
     //Icon - Label
    protected static ?string $navigationIcon = 'heroicon-s-building-office';
    protected static ?string $navigationLabel = 'Negocio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('negocio_nombre')->label('Nombre')->required(),
                TextArea::make('negocio_direccion')->label('Dirección')->autosize()->required(),
                TextInput::make('negocio_telefono')->label('Telefono')->required(),
                TextInput::make('negocio_whatsapp')->label('WhatsApp')->required(),
                TextInput::make('negocio_facebook')->label('Facebook'),
                TextInput::make('negocio_tiktok')->label('Tiktok'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('negocio_nombre')->label('Nombre'),
                TextColumn::make('negocio_direccion')->label('Dirección'),
                TextColumn::make('negocio_telefono')->label('Telefono'),
                TextColumn::make('negocio_whatsapp')->label('WhatsApp'),
                TextColumn::make('negocio_facebook')->label('Facebook'),
                TextColumn::make('negocio_tiktok')->label('Tiktok'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNegocio::route('/'),
            'create' => Pages\CreateNegocio::route('/create'),
            'edit' => Pages\EditNegocio::route('/{record}/edit'),
        ];
    }
}
