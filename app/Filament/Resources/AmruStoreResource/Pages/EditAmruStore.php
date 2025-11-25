<?php

namespace App\Filament\Resources\AmruStoreResource\Pages;

use App\Filament\Resources\AmruStoreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmruStore extends EditRecord
{
    protected static string $resource = AmruStoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
