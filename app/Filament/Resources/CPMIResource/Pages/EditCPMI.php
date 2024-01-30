<?php

namespace App\Filament\Resources\CPMIResource\Pages;

use App\Filament\Resources\CPMIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCPMI extends EditRecord
{
    protected static string $resource = CPMIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
