<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CharacteristicResource\Pages;
use App\Filament\Resources\CharacteristicResource\RelationManagers;
use App\Models\Characteristic;
use App\Models\CharacteristicCategory;
use Filament\Forms;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharacteristicResource extends Resource
{
    protected static ?string $model = Characteristic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('characteristic_category_id')
                    ->label('Category')
                    ->options(CharacteristicCategory::all()->pluck('name', 'id'))
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                KeyValue::make('meta_data')
                    ->default([
                        'description' => '',
                        'type' => '',
                    ])
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('characteristicCategory.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),


                    TextColumn::make('meta_data')
                    ->label('Meta Data')
                    ->formatStateUsing(function ($state, $record) {
                        $data = json_decode($record->getRawOriginal('meta_data'), true);

                        if (!is_array($data)) {
                            return '-';
                        }

                        return collect($data)
                            ->map(fn($value, $key) => "<strong>{$key}</strong>: {$value}")
                            ->implode('<br>');
                    })
                    ->html()
                    ->wrap(),
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
            'index' => Pages\ListCharacteristics::route('/'),
            'create' => Pages\CreateCharacteristic::route('/create'),
            'edit' => Pages\EditCharacteristic::route('/{record}/edit'),
        ];
    }
}
