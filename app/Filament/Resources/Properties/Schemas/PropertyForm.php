<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('status')
                    ->label('Ready')
                    ->default(true)
                    ->helperText('Tandai jika rumah ready/tersedia')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('lt')
                    ->required()
                    ->numeric(),
                TextInput::make('lb')
                    ->required()
                    ->numeric(),
                TextInput::make('floors')
                    ->required()
                    ->numeric(),
                TextInput::make('bedrooms')
                    ->required()
                    ->numeric(),
                TextInput::make('bathrooms')
                    ->required()
                    ->numeric(),
                TextInput::make('carports')
                    ->required()
                    ->numeric(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('properties')
                    ->required(),
                Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('properties/gallery')
                            ->required(),
                    ])
                    ->helperText('masukan 6 gambar')
                    ->maxItems(6)
                    ->columnSpanFull(),
            ]);
    }
}
