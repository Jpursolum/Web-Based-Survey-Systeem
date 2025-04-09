<?php

namespace App\Filament\Resources\SurveyResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\SurveyChart; // Your custom chart widget
use App\Filament\Resources\SurveyResource;

class ListSurveys extends ListRecords
{
    protected static string $resource = SurveyResource::class;

    protected function getWidgets(): array
    {
        return [
            SurveyChart::class, // Adding the custom chart widget to the list page
        ];
    }
}
