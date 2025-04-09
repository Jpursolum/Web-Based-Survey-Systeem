<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Survey;

class TopRegionsChart extends ChartWidget
{
    protected static ?string $heading = 'Top Regions';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $regions = Survey::selectRaw('region, COUNT(*) as count')
            ->groupBy('region')
            ->orderByDesc('count')
            ->limit(17)
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Number of Responses',
                    'data' => $regions->pluck('count'),
                    'backgroundColor' => '#4f46e5',
                ],
            ],
            'labels' => $regions->pluck('region'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
