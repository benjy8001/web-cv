<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-medium">Disponibilité</h3>
                <p class="text-sm text-gray-500">
                    {{ $this->isAvailable ? 'Vous êtes disponible' : 'Vous n\'êtes pas disponible' }}
                </p>
            </div>
            <x-filament::button
                wire:click="toggle"
                :color="$this->isAvailable ? 'success' : 'danger'"
            >
                {{ $this->isAvailable ? 'Disponible' : 'Indisponible' }}
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
