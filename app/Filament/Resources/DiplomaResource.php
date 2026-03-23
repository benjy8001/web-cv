<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiplomaResource\Pages;
use App\Models\Diploma;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
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

class DiplomaResource extends Resource
{
    use Translatable;

    protected static ?string $model = Diploma::class;
    protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedAcademicCap;
    protected static string | \UnitEnum | null $navigationGroup = 'CV';
    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schemas\Components\Section::make('Informations')->schema([
                Forms\Components\TextInput::make('school')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('specialization')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mention')
                    ->maxLength(255),
            ])->columns(2),

            Schemas\Components\Section::make('Période')->schema([
                Forms\Components\TextInput::make('year_start')
                    ->label('Année début')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('year_end')
                    ->label('Année fin')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Ordre')
                    ->numeric()
                    ->default(0),
            ])->columns(3),

            Schemas\Components\Section::make('Logo')->schema([
                SpatieMediaLibraryFileUpload::make('logo')
                    ->collection('logo')
                    ->image(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('school')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year_start')
                    ->sortable(),
                Tables\Columns\TextColumn::make('year_end')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mention'),
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
            'index' => Pages\ListDiplomas::route('/'),
            'create' => Pages\CreateDiploma::route('/create'),
            'edit' => Pages\EditDiploma::route('/{record}/edit'),
        ];
    }
}
