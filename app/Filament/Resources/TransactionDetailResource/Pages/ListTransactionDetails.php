<?php

namespace App\Filament\Resources\TransactionDetailResource\Pages;

use App\Filament\Resources\TransactionDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransactionDetails extends ListRecords
{
    protected static string $resource = TransactionDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
