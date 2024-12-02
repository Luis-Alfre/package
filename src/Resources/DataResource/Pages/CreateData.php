<?php 

namespace Watchtower\Resources\DataResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Watchtower\Resources\DataResource;
use Watchtower\Models\DataModel;

class CreateData extends CreateRecord
{
    protected static string $resource = DataResource::class;
}
