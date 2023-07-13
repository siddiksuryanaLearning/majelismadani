<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Participant;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Pendaftaran', Participant::count())
                ->description('peserta yang telah mengisi form')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('success')
                ->descriptionIcon('heroicon-s-trending-up')
                ->descriptionColor('success'),
            Card::make('Total Pendaftaran Hari ini ', Participant::whereDate('created_at', today())->count())
                ->description('peserta yang daftar hari ini')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('primary')
                ->descriptionIcon('heroicon-s-trending-up')
                ->descriptionColor('primary'),
            Card::make('Kendaraan Pribadi', Participant::query()->where('vehicle', 'private')->count())
                ->description('peserta menggunakan kendaraan pribadi')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('primary')
                ->descriptionIcon('heroicon-s-trending-up')
                ->descriptionColor('primary'),
            Card::make('Bus', Participant::query()->where('vehicle', 'bus')->count())
                ->description('peserta menggunakan BUS')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('primary')
                ->descriptionIcon('heroicon-s-trending-up')
                ->descriptionColor('primary'),
            Card::make('Hadir', Order::query()->where('status', 'hadir')->count())
                ->description('peserta yang telah terkonfirmasi hadir')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('success')
                ->descriptionIcon('heroicon-s-trending-up')
                ->descriptionColor('success'),
            Card::make('Batal Datang ', Order::query()->where('status', 'batal')->count())
                ->description('Peserta yang batal datang')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('danger')
                ->descriptionIcon('heroicon-s-trending-down')
                ->descriptionColor('danger'),
            Card::make('Follow Up', Order::query()->where('status', 'followUp')->count())
                ->description('Peserta yang belum terkonfirmasi')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->chartColor('secondary')
                ->descriptionIcon('heroicon-s-trending-up')
                ->descriptionColor('secondary'),
        ];
    }
}
