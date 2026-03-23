<?php

namespace App\Filament\Widgets;

use App\Models\Setting;
use Filament\Widgets\Widget;

class MaintenanceToggleWidget extends Widget
{
    protected string $view = 'filament.widgets.maintenance-toggle';
    protected int | string | array $columnSpan = 1;

    public bool $isMaintenance = false;

    public function mount(): void
    {
        $this->isMaintenance = Setting::get('is_maintenance') === 'true';
    }

    public function toggle(): void
    {
        $this->isMaintenance = !$this->isMaintenance;
        Setting::set('is_maintenance', $this->isMaintenance ? 'true' : 'false');
    }
}
