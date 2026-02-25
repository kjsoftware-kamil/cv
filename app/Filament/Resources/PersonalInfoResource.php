<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalInfoResource\Pages;
use App\Models\PersonalInfo;
use BackedEnum;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use UnitEnum;

class PersonalInfoResource extends Resource
{
    protected static ?string $model = PersonalInfo::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Personal Info';

    protected static ?string $pluralModelLabel = 'Personal Info';

    protected static string|UnitEnum|null $navigationGroup = 'Website';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                \Filament\Schemas\Components\Fieldset::make('Profile')
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->disk('public')
                            ->directory('personal')
                            ->avatar()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('full_name')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-user'),
                        Forms\Components\TextInput::make('job_title')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-briefcase'),
                        Forms\Components\Textarea::make('bio')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
                \Filament\Schemas\Components\Section::make('English Translation')
                    ->schema([
                        Forms\Components\TextInput::make('job_title_en')
                            ->label('Job Title (EN)')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('bio_en')
                            ->label('Bio (EN)')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed(),
                \Filament\Schemas\Components\Fieldset::make('Contact Details')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-envelope'),
                        Forms\Components\TextInput::make('phone')
                            ->tel()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-phone'),
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-map-pin'),
                    ]),
                \Filament\Schemas\Components\Fieldset::make('Additional Info')
                    ->schema([
                        Forms\Components\TextInput::make('driving_licence')
                            ->maxLength(255)
                            ->placeholder('e.g. B'),
                        Forms\Components\TextInput::make('languages')
                            ->maxLength(255)
                            ->placeholder('e.g. Dutch, English, Polish'),
                    ]),
                \Filament\Schemas\Components\Fieldset::make('Social Links')
                    ->schema([
                        Forms\Components\TextInput::make('website')
                            ->url()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-globe-alt'),
                        Forms\Components\TextInput::make('linkedin')
                            ->url()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-link'),
                        Forms\Components\TextInput::make('github')
                            ->url()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-code-bracket'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('job_title')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('email')
                    ->icon('heroicon-o-envelope')
                    ->copyable(),
                Tables\Columns\TextColumn::make('phone')
                    ->icon('heroicon-o-phone'),
                Tables\Columns\TextColumn::make('location')
                    ->icon('heroicon-o-map-pin'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonalInfos::route('/'),
            'create' => Pages\CreatePersonalInfo::route('/create'),
            'edit' => Pages\EditPersonalInfo::route('/{record}/edit'),
        ];
    }
}
