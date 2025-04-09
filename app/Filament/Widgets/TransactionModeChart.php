<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Survey;

class TransactionModeChart extends ChartWidget
{
    protected static ?string $heading = 'Transaction Mode Split';
    protected static ?int $sort = 5;

    protected function getData(): array
    {
        $modes = ['Physical', 'Online', 'Both'];

        $data = [];
        foreach ($modes as $mode) {
            $data[] = Survey::where('transaction_mode', $mode)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Transaction Modes',
                    'data' => $data,
                    'backgroundColor' => ['#f59e0b', '#10b981', '#3b82f6'],
                ],
            ],
            'labels' => $modes,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
