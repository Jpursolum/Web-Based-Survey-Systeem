<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Survey; // make sure this is the correct model

class TotalSurveyStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Surveys', Survey::count())
                ->description('All time survey responses')
                ->icon('heroicon-o-clipboard-document')
                ->color('success'), // optional: primary, success, danger, warning, etc.
        ];
    }
}
