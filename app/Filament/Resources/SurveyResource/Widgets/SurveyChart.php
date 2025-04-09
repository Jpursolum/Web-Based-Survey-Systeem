<?php

namespace App\Filament\Widgets;

use App\Models\Survey;
use Filament\Widgets\ChartWidget;

class SurveyChart extends ChartWidget
{
    protected static ?string $heading = 'Survey by Client Type';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // Get count per client type
        $data = Survey::selectRaw('client_type, COUNT(*) as total')
            ->groupBy('client_type')
            ->pluck('total', 'client_type');

        // Make sure consistent yung order ng labels
        $labels = ['Citizen', 'Business', 'Government'];
        $chartData = [];

        foreach ($labels as $label) {
            $chartData[] = $data[$label] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Responses',
                    'data' => $chartData,
                    'backgroundColor' => ['#16a34a', '#22c55e', '#4ade80'],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // or pie, line, etc.
    }
}
