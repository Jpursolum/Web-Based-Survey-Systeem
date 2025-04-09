<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Survey;

class AgeRangeChart extends ChartWidget
{
    protected static ?string $heading = 'Age Range Distribution';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $ageGroups = [
            '18-25', '26-35', '36-45', '46-60', '60+'
        ];

        $data = [];
        foreach ($ageGroups as $age) {
            $data[] = Survey::where('age', $age)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Age Groups',
                    'data' => $data,
                    'backgroundColor' => ['#f87171', '#fb923c', '#facc15', '#34d399', '#60a5fa'],
                ],
            ],
            'labels' => $ageGroups,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
