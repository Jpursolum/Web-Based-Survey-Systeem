<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Survey;

class TotalSurveyStats extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Surveys', Survey::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->description('All time survey responses')
                ->icon('heroicon-o-clipboard-document')
                ->color('danger')
                ->chart([2, 10, 13, 15, 21, 30, 25, 40, 50, 60, 70, 80, 90, 100])
                ->url(route('filament.admin.resources.surveys.index')) // ← clickable stat!
        ];
    }
}
