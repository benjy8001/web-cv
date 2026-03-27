<?php

namespace App\Filament\Widgets;

use App\Models\Setting;
use Filament\Widgets\Widget;

class AvailabilityWidget extends Widget
{
    protected string $view = 'filament.widgets.availability-widget';
    protected int | string | array $columnSpan = 1;

    public bool $isAvailable = false;

    public function mount(): void
    {
        $this->isAvailable = Setting::get('is_available') === 'true';
    }

    public function toggle(): void
    {
        $this->isAvailable = !$this->isAvailable;
        Setting::set('is_available', $this->isAvailable ? 'true' : 'false');
    }
}
