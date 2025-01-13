<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MensajerosResource\Pages;
use App\Filament\Resources\MensajerosResource\RelationManagers;
use App\Models\Mensajeros;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MensajerosResource extends Resource
{
    protected static ?string $model = Mensajeros::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $activeNavigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $navigationLabel = 'Mensajeros del Negocio';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_messager')
                    ->label('Nombre del Mensajero')
                    ->required(),
                Forms\Components\TextInput::make('phone_messager')
                    ->label('Teléfono del Mensajero')
                    ->tel()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_messager')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_messager')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMensajeros::route('/'),
            'create' => Pages\CreateMensajeros::route('/create'),
            'edit' => Pages\EditMensajeros::route('/{record}/edit'),
        ];
    }
}
