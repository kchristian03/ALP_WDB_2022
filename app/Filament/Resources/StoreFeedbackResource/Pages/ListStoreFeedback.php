<?php

namespace App\Filament\Resources\StoreFeedbackResource\Pages;

use App\Filament\Resources\StoreFeedbackResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStoreFeedback extends ListRecords
{
    protected static string $resource = StoreFeedbackResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
