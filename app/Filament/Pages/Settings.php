<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class Settings extends Page
{
    use InteractsWithForms;

    protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static ?string $navigationLabel = 'Paramètres';
    protected static ?int $navigationSort = 99;

    protected string $view = 'filament.pages.settings';

    public ?array $data = [];

    public Setting $settingsRecord;

    public function mount(): void
    {
        $this->settingsRecord = Setting::getGlobal();
        $this->form->fill(Setting::allAsArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schemas\Components\Section::make('Informations personnelles')->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom complet')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('Téléphone'),
                Forms\Components\Textarea::make('address')
                    ->label('Adresse')
                    ->rows(2),
            ])->columns(2),

            Schemas\Components\Section::make('Réseaux')->schema([
                Forms\Components\TextInput::make('linkedin')
                    ->url()
                    ->prefix('https://'),
                Forms\Components\TextInput::make('github')
                    ->url()
                    ->prefix('https://'),
            ])->columns(2),

            Schemas\Components\Section::make('Statut')->schema([
                Forms\Components\Toggle::make('is_available')
                    ->label('À l\'écoute d\'opportunités')
                    ->helperText('Affiché sur la page d\'accueil'),
                Forms\Components\Toggle::make('is_maintenance')
                    ->label('Mode maintenance')
                    ->helperText('Active la page de maintenance pour les visiteurs'),
            ])->columns(2),

            Schemas\Components\Section::make('CV')->schema([
                SpatieMediaLibraryFileUpload::make('cv_pdf')
                    ->collection('cv_pdf')
                    ->model($this->settingsRecord)
                    ->acceptedFileTypes(['application/pdf'])
                    ->label('Fichier CV (PDF)')
                    ->helperText('Le fichier PDF affiché sur la page d\'accueil pour téléchargement'),
            ]),
        ])->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->form->saveRelationships();

        foreach ($data as $key => $value) {
            if ($key === 'cv_pdf') {
                continue;
            }

            Setting::set($key, match (true) {
                $value === true => 'true',
                $value === false => 'false',
                default => $value,
            });
        }

        Notification::make()
            ->title('Paramètres sauvegardés')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Enregistrer')
                ->action('save'),
        ];
    }
}
