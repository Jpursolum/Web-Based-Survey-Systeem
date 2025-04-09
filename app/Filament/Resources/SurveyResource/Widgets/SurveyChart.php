<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class SurveyChart extends ChartWidget
{
    protected static ?string $heading = 'Survey Responses';
    protected static ?int $sort = 2; // You can change this to control widget order

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Responses',
                    'data' => [5, 10, 7, 3, 8],
                    'backgroundColor' => [
                        '#16a34a', '#22c55e', '#4ade80', '#86efac', '#bbf7d0',
                    ],
                ],
            ],
            'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // You can also use 'line', 'pie', etc.
    }
}
