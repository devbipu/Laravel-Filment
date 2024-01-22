<?php

namespace App\Filament\Widgets;

use App\Models\Owner;
use App\Models\Patient;
use App\Models\Treatment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Patient', Patient::query()->where('type', 'cat')->count()),
            Stat::make('Owner', Owner::query()->count()),
            Stat::make('Treatment', Treatment::query()->count()),
        ];
    }
}