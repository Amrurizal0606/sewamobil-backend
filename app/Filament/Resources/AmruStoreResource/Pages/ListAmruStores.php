<?php

namespace App\Filament\Resources\AmruStoreResource\Pages;

use App\Filament\Resources\AmruStoreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmruStores extends ListRecords
{
    protected static string $resource = AmruStoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
