<?php

namespace App\Filament\Resources\CPMIResource\Pages;

use App\Filament\Resources\CPMIResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCPMIS extends ListRecords
{
    protected static string $resource = CPMIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
