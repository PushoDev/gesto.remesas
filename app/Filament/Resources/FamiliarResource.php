<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FamiliarResource\Pages;
use App\Filament\Resources\FamiliarResource\RelationManagers;
use App\Models\Familiar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FamiliarResource extends Resource
{
    protected static ?string $model = Familiar::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $activeNavigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationLabel = 'Familiares';

    protected static ?string $navigationBadgeTooltip = 'familiares y Amistades';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Cliente que Contrata
                Forms\Components\Select::make('cliente_id')
                    ->relationship('cliente', 'name_cliente')
                    ->label('Servicio Contratado por:')
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name_cliente')
                            ->label('Nombre del Cliente')
                            ->required(),
                        Forms\Components\TextInput::make('phone_cliente')
                            ->label('Número de Teléfono')
                            ->numeric()
                            ->tel()
                            ->required(),
                    ]),
                // Mensajero Asignado
                Forms\Components\Select::make('mensajero_id')
                    ->relationship('mensajero', 'name_messager')
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name_messager')
                            ->label('Nombre del Mensajero')
                            ->required(),
                        Forms\Components\TextInput::make('phone_messager')
                            ->label('Teléfono del Mensajero')
                            ->tel()
                            ->numeric()
                            ->required(),
                    ]),
                // Fecha del Servicio
                Forms\Components\Select::make('envio_id')
                    ->label('Fecha del Servicio')
                    ->relationship('envios', 'date_contrated')
                    ->required()
                    ->createOptionForm([
                        // Fecha
                        Forms\Components\DatePicker::make('date_contrated')
                            ->label('Fecha de Servicio')
                            ->date()
                            ->required(),
                        // Cant Envía
                        Forms\Components\TextInput::make('cantidad_send')
                            ->label('Cantidad a Enviar')
                            ->numeric()
                            ->required(),
                    ]),
                Forms\Components\Select::make('envio_id')
                    ->label('Monto a Enviar')
                    ->relationship('envios', 'cantidad_send')
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('cantidad_send')
                            ->label('Cantidad a Enviar')
                            ->required(),
                        Forms\Components\DatePicker::make('date_contrated')
                            ->label('Fecha de Servicio')
                            ->date()
                            ->required(),
                    ]),
                Forms\Components\TextInput::make('city_familiar')
                    ->label('Municipio o Lacalidad'),
                Forms\Components\TextInput::make('name_familiar')
                    ->label('Nombre del Familiar'),
                Forms\Components\TextInput::make('phone_familiar')
                    ->label('Teléfono de Contacto')
                    ->tel()
                    ->numeric(),
                Forms\Components\TextInput::make('address_familiar')
                    ->label('Dirección Residencial o Referencia'),
                Forms\Components\Select::make('transaccion')
                    ->label('Tipo de Operación')
                    ->options([
                        'efectivo' => 'Efectivo',
                        'transferencia' => 'Transferencia',
                    ])
                    ->required(),
                Forms\Components\Select::make('type_efectivo')
                    ->label('Tipo de Efectivo')
                    ->options([
                        'cup' => 'CUP: Moneda Nacional',
                        'usd' => 'USD: Dollars American'
                    ]),
                Forms\Components\Select::make('type_transferencia')
                    ->label('Tipo de Transferencia')
                    ->options([
                        'cup' => 'CUP: Moneda Nacional',
                        'mlc' => 'MLC: Moneda Libre Convertible'
                    ]),
                Forms\Components\TextInput::make('card_familiar')
                    ->label('No. de Tarjeta')
                    ->numeric(),
                Forms\Components\TextInput::make('received_familiar')
                    ->label('Cantidad a Recibir')
                    ->numeric(),
                Forms\Components\Toggle::make('send_reseived')
                    ->label('Servicio Completado')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cliente.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('envio_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mensajero.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city_familiar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_familiar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_familiar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address_familiar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transaccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_efectivo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_transferencia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('card_familiar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('received_familiar')
                    ->searchable(),
                Tables\Columns\IconColumn::make('send_reseived')
                    ->boolean(),
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
            'index' => Pages\ListFamiliars::route('/'),
            'create' => Pages\CreateFamiliar::route('/create'),
            'edit' => Pages\EditFamiliar::route('/{record}/edit'),
        ];
    }
}
