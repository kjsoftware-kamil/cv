<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Models\Skill;
use BackedEnum;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use UnitEnum;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationLabel = 'Skills';

    protected static string|UnitEnum|null $navigationGroup = 'Portfolio';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                \Filament\Schemas\Components\Fieldset::make('Skill Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('icon')
                            ->label('Logo / Icon')
                            ->image()
                            ->disk('public')
                            ->directory('skill-icons')
                            ->nullable()
                            ->deletable()
                            ->helperText('Upload a logo (PNG, SVG, JPG). Falls back to first letter if empty.'),
                        Forms\Components\TextInput::make('category')
                            ->maxLength(255)
                            ->placeholder('e.g. Frontend, Backend, DevOps'),
                        Forms\Components\TextInput::make('proficiency')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->default(50)
                            ->suffix('%')
                            ->helperText('Skill proficiency from 0 to 100'),
                        Forms\Components\ColorPicker::make('color')
                            ->helperText('Leave empty for default color'),
                    ]),
                \Filament\Schemas\Components\Section::make('English Translation')
                    ->schema([
                        Forms\Components\TextInput::make('name_en')
                            ->label('Name (EN)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('category_en')
                            ->label('Category (EN)')
                            ->maxLength(255),
                    ])
                    ->collapsible()
                    ->collapsed(),
                \Filament\Schemas\Components\Fieldset::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('is_visible')
                            ->label('Visible on website')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon')
                    ->label('Logo')
                    ->circular()
                    ->defaultImageUrl(fn ($record) => null),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('#')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color('info')
                    ->sortable(),
                Tables\Columns\TextColumn::make('proficiency')
                    ->suffix('%')
                    ->sortable()
                    ->color(fn (int $state): string => match (true) {
                        $state >= 80 => 'success',
                        $state >= 50 => 'warning',
                        default => 'danger',
                    }),
                Tables\Columns\ColorColumn::make('color'),
                Tables\Columns\IconColumn::make('is_visible')
                    ->boolean(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
