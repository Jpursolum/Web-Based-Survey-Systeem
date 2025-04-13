<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Survey;
use Filament\Support\RawJs;

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

    protected function getOptions(): array
    {
        return [
            'onClick' => RawJs::make(<<<'JS'
                function(event, elements) {
                    if (elements.length > 0) {
                        const chart = elements[0];
                        const label = this.data.labels[chart.index];
                        window.location.href = `/admin/surveys?tableFilters[region][value]=` + encodeURIComponent(label);
                    }
                }
            JS),
        ];
    }
}
