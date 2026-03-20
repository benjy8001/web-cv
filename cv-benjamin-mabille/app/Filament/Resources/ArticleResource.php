<?php

namespace App\Filament\Resources;

use App\Enums\ArticleStatus;
use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
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

class ArticleResource extends Resource
{
    use Translatable;

    protected static ?string $model = Article::class;
    protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedDocumentText;
    protected static string | \UnitEnum | null $navigationGroup = 'Blog';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schemas\Components\Group::make()->schema([
                Schemas\Components\Section::make('Contenu')->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('Titre')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true),
                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->dehydrated()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('excerpt')
                        ->label('Extrait')
                        ->rows(3)
                        ->maxLength(500),
                    Forms\Components\RichEditor::make('body')
                        ->label('Contenu')
                        ->required()
                        ->columnSpanFull()
                        ->toolbarButtons([
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h2',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ]),
                ]),
            ])->columnSpan(['lg' => 2]),

            Schemas\Components\Group::make()->schema([
                Schemas\Components\Section::make('Publication')->schema([
                    Forms\Components\Select::make('status')
                        ->options(ArticleStatus::class)
                        ->default(ArticleStatus::Draft)
                        ->required(),
                    Forms\Components\DateTimePicker::make('published_at')
                        ->label('Date de publication'),
                ]),

                Schemas\Components\Section::make('Taxonomie')->schema([
                    Forms\Components\Select::make('tags')
                        ->relationship('tags', 'name')
                        ->multiple()
                        ->preload()
                        ->createOptionForm([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(50),
                        ]),
                ]),
            ])->columnSpan(['lg' => 1]),
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('status')
                    ->badge(),
                Tables\Columns\TextColumn::make('reading_time')
                    ->label('Lecture')
                    ->suffix(' min'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tags.name')
                    ->badge(),
            ])
            ->defaultSort('published_at', 'desc')
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
