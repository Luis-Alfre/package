<?php


namespace Watchtower\Resources;

use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Watchtower\Models\DataModel;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Watchtower\Resources\DataResource\Pages\CreateData;
use Watchtower\Resources\DataResource\Pages\ListData;
use Watchtower\Resources\DataResource\Pages\EditData;


class DataResource extends Resource
{
    protected static ?string $model = DataModel::class;
    protected static ?string $navigationLabel = 'Data Model';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('data')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('data')->limit(50),
            ])
            ->filters([])
            ->actions([
         
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListData::route('/'),
            'create' => CreateData::route('/create'),
            'edit' => EditData::route('/{record}/edit'),
        ];
    }
}
