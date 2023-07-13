<?php

namespace App\Filament\Resources\OrdersResource\Pages;

use App\Filament\Resources\OrdersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrders extends EditRecord
{
    protected static string $resource = OrdersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
