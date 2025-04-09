<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Survey;
use Filament\Actions\Action; // Import the Action class

class TotalSurveyStats extends BaseWidget
{
    // Set the sort order for this widget (lower numbers mean higher up in the order)
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Surveys', Survey::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->description('All time survey responses')
                ->icon('heroicon-o-clipboard-document')
                ->color('danger') // optional: primary, success, danger, warning, etc.
                ->chart([2, 10, 13, 15, 21, 30, 25, 40, 50, 60, 70, 80, 90, 100])
        ];
    }

    // Add actions to the widget
    public function getActions(): array
    {
        return [
            Action::make('View Responses') // Create an action
                ->url('http://127.0.0.1:8000/admin/surveys') // Directly set the URL you want to open
                ->icon('heroicon-o-view-list') // Optional: Icon for the action
                ->color('primary'), // Optional: Button color
        ];
    }
}
