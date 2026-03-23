<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-medium">Maintenance</h3>
                <p class="text-sm text-gray-500">
                    {{ $this->isMaintenance ? 'Site en maintenance' : 'Site en ligne' }}
                </p>
            </div>
            <x-filament::button
                wire:click="toggle"
                :color="$this->isMaintenance ? 'danger' : 'success'"
            >
                {{ $this->isMaintenance ? 'Désactiver' : 'Activer' }}
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
