<?php

namespace App\Filament\Resources\StoreFeedbackResource\Pages;

use App\Filament\Resources\StoreFeedbackResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStoreFeedback extends EditRecord
{
    protected static string $resource = StoreFeedbackResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
