<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Survey;

class SurveyChart extends Widget
{
    protected static string $view = 'filament.widgets.survey-chart'; // The Blade view for the chart

    public function mount()
    {
        // Initialize any data needed for the chart
        $this->surveyData = Survey::select('column_name')->get(); // Adjust based on what you need
    }
}
