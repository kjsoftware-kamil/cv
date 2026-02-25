<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\RecentMessages;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Overview';

    protected static ?string $title = 'Overview';

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            RecentMessages::class,
        ];
    }
}
