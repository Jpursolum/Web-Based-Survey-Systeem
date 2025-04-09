<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Survey;
use Illuminate\Support\Collection;

class AverageSurveyRatings extends ChartWidget
{
    protected static ?string $heading = 'Average Ratings per Survey Question';
    protected static ?int $sort = 6;

    protected function getData(): array
    {
        $questions = collect(range(0, 8))->map(fn($i) => "SQD{$i}");
        $averages = $questions->map(function ($field) {
            return (float) Survey::whereNotNull($field)->avg($field);
        });

        return [
            'datasets' => [
                [
                    'label' => 'Average Rating',
                    'data' => $averages,
                    'backgroundColor' => '#22c55e',
                ],
            ],
            'labels' => $questions,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
