<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Models\Education;
use BackedEnum;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use UnitEnum;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Education';

    protected static ?string $pluralModelLabel = 'Education';

    protected static string|UnitEnum|null $navigationGroup = 'Portfolio';

    protected static ?int $navigationSort = 4;

    protected static ?string $recordTitleAttribute = 'degree';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                \Filament\Schemas\Components\Fieldset::make('Education')
                    ->schema([
                        Forms\Components\TextInput::make('degree')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. Bachelor of Science'),
                        Forms\Components\TextInput::make('field_of_study')
                            ->maxLength(255)
                            ->placeholder('e.g. Computer Science'),
                        Forms\Components\TextInput::make('institution')
                            ->required()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-academic-cap'),
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-map-pin'),
                    ]),
                \Filament\Schemas\Components\Section::make('English Translation')
                    ->schema([
                        Forms\Components\TextInput::make('degree_en')
                            ->label('Degree (EN)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('field_of_study_en')
                            ->label('Field of Study (EN)')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description_en')
                            ->label('Description (EN)')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed(),
                \Filament\Schemas\Components\Fieldset::make('Duration')
                    ->schema([
                        Forms\Components\DatePicker::make('start_date')
                            ->required()
                            ->native(false),
                        Forms\Components\DatePicker::make('end_date')
                            ->native(false)
                            ->visible(fn (\Filament\Schemas\Components\Utilities\Get $get) => !$get('is_current')),
                        Forms\Components\Toggle::make('is_current')
                            ->label('Currently studying here')
                            ->live()
                            ->default(false),
                    ])
                    ->columns(3),
                \Filament\Schemas\Components\Fieldset::make('Details')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),
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
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('#')
                    ->sortable(),
                Tables\Columns\TextColumn::make('degree')
                    ->searchable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->field_of_study),
                Tables\Columns\TextColumn::make('institution')
                    ->searchable()
                    ->icon('heroicon-o-academic-cap'),
                Tables\Columns\TextColumn::make('start_date')
                    ->date('M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date('M Y')
                    ->placeholder('Present')
                    ->badge()
                    ->color(fn ($state) => $state ? 'gray' : 'success'),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
