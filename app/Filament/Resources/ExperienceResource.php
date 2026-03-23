<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    use Translatable;

    protected static ?string $model = Experience::class;
    protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedBriefcase;
    protected static string | \UnitEnum | null $navigationGroup = 'CV';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schemas\Components\Section::make('Entreprise')->schema([
                Forms\Components\TextInput::make('company')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->label('Poste')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255),
            ])->columns(2),

            Schemas\Components\Section::make('Période')->schema([
                Forms\Components\DatePicker::make('date_start')
                    ->label('Date début')
                    ->required(),
                Forms\Components\DatePicker::make('date_end')
                    ->label('Date fin'),
                Forms\Components\Toggle::make('is_current')
                    ->label('Poste actuel'),
            ])->columns(3),

            Schemas\Components\Section::make('Détails')->schema([
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Ordre')
                    ->numeric()
                    ->default(0),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_start')
                    ->date('M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_end')
                    ->date('M Y')
                    ->placeholder('En cours'),
                Tables\Columns\IconColumn::make('is_current')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
