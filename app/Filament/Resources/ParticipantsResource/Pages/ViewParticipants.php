<?php

namespace App\Filament\Resources\ParticipantsResource\Pages;

use App\Filament\Resources\ParticipantsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewParticipants extends ViewRecord
{
    protected static string $resource = ParticipantsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
