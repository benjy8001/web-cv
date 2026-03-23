<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UnreadMessagesWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Messages non lus', Contact::unread()->count())
                ->description('Messages de contact')
                ->icon('heroicon-o-envelope')
                ->color('warning'),
            Stat::make('Total messages', Contact::count())
                ->description('Tous les messages')
                ->icon('heroicon-o-inbox'),
            Stat::make('Articles publiés', Article::published()->count())
                ->description('Sur le blog')
                ->icon('heroicon-o-document-text')
                ->color('success'),
        ];
    }
}
