<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZonaResource\Pages;
use App\Filament\Resources\ZonaResource\RelationManagers;
use App\Models\Zona;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ZonaResource extends Resource
{
    //Class
    protected static ?string $model = Zona::class;
    //Group
     protected static ?string $navigationGroup = 'Datos del Negocio';
    //Icon - Label
    protected static ?string $navigationLabel = 'Cobertura';
    protected static ?string $navigationIcon = 'heroicon-s-map-pin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('zona_nombre')->label('Zona-(Colonia)')->required()->unique(),
                TextArea::make('zona_notas')->label('Notas')->nullable()->autosize()
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('zona_nombre')
                ->label('Zona')
                ->searchable()
                ->sortable(),
                TextColumn::make('zona_notas')->label('Notas')
            ])
            ->headerActions([
                Action::make('copyZones')
                ->label('Copiar zonas a WhatsApp')
                ->icon('heroicon-s-clipboard-document-check')
                ->color('success')
                ->action(function($livewire){
                    //get zonas
                    $zonas = Zona::pluck('zona_nombre')->toArray();
                    $texto = "Nuestras zonas de cobertura gratuita son:\n " .implode("\n", $zonas);
                    //Js para copiar al portapapeles
                    $livewire->dispatch('copy-to-clipboard', text: $texto);
                    //Send Notification
                    Notification::make()
                    ->title('Copiado!')
                    ->body('La lista de zonas esta lista para pegar en WhatsApp')
                    ->success()
                    ->send();
                })
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
            'index' => Pages\ListZonas::route('/'),
            'create' => Pages\CreateZona::route('/create'),
            'edit' => Pages\EditZona::route('/{record}/edit'),
        ];
    }
}
