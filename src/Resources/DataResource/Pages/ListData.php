<?php


namespace Watchtower\Resources\DataResource\Pages;

use Filament\Pages\Actions;
use Watchtower\Filament\Resources\DataResource;
use Filament\Resources\Pages\ListRecords;

class ListData extends ListRecords
{
    protected static string $resource = DataResource::class;
}