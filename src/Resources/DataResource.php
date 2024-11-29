<?php


namespace Watchtower\Resources;

use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Watchtower\Models\DataModel;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Tables\Table;


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
            'index' => Pages\ListData::route('/'),
            'create' => Pages\CreateData::route('/create'),
            'edit' => Pages\EditData::route('/{record}/edit'),
        ];
    }
}
