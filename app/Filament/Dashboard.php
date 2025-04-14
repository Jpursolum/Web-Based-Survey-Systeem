<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\AgeRangeChart;
use App\Filament\Widgets\TransactionModeChart;
use App\Filament\Widgets\TopRegionsChart;
use App\Filament\Widgets\AverageSurveyRatings;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected function getWidgets(): array
    {
        return [
            // Defining two columns for your widgets
            AgeRangeChart::class,
            TransactionModeChart::class,
            // Optionally, add other widgets for the second column
            TopRegionsChart::class,
           // AverageSurveyRatings::class,
        ];
    }
}
