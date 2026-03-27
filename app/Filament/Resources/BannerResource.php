<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Models\Banner;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables;
use Filament\Tables\Table;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;

class BannerResource extends Resource
{
    use Translatable;

    protected static ?string $model = Banner::class;
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;
    protected static string|\UnitEnum|null $navigationGroup = 'CV';
    protected static ?int $navigationSort = 0;
    protected static ?string $navigationLabel = 'Hero Banners';
    protected static ?string $modelLabel = 'Banner';
    protected static ?string $pluralModelLabel = 'Banners';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schemas\Components\Section::make('Contenu')->schema([
                Forms\Components\TagsInput::make('roles')
                    ->label('Rôles animés')
                    ->helperText('Appuyez sur Entrée pour ajouter chaque rôle. Ils s\'afficheront en animation sur le Hero.')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('subtitle')
                    ->label('Sous-titre')
                    ->helperText('Texte optionnel affiché sous les rôles.')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]),

            Schemas\Components\Section::make('Statut')->schema([
                Forms\Components\Toggle::make('is_active')
                    ->label('Actif')
                    ->helperText('Seuls les banners actifs sont affichés sur le site.')
                    ->default(true),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Ordre')
                    ->numeric()
                    ->default(0),
            ])->columns(2),

            Schemas\Components\Section::make('Image de fond')->schema([
                SpatieMediaLibraryFileUpload::make('background')
                    ->collection('background')
                    ->image()
                    ->label('Image de fond (optionnelle)')
                    ->helperText('Affichée en arrière-plan du Hero avec une opacité réduite.'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('roles')
                    ->label('Rôles')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Sous-titre')
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Actif')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Ordre')
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
