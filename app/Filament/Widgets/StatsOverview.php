<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Section;
use App\Models\Skill;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $unreadMessages = ContactMessage::where('is_read', false)->count();
        $totalMessages = ContactMessage::count();

        return [
            Stat::make('Total Messages', $totalMessages)
                ->description($unreadMessages . ' unread')
                ->descriptionIcon($unreadMessages > 0 ? 'heroicon-m-envelope' : 'heroicon-m-envelope-open')
                ->color($unreadMessages > 0 ? 'warning' : 'success'),
            Stat::make('Projects', Project::visible()->count())
                ->description('Visible on website')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->color('info'),
            Stat::make('Skills', Skill::visible()->count())
                ->description('Visible on website')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('success'),
            Stat::make('Sections', Section::visible()->count())
                ->description(Section::count() . ' total')
                ->descriptionIcon('heroicon-m-squares-2x2')
                ->color('primary'),
            Stat::make('Experience', Experience::visible()->count())
                ->description('Positions listed')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info'),
            Stat::make('Education', Education::visible()->count())
                ->description('Entries listed')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('success'),
        ];
    }
}
