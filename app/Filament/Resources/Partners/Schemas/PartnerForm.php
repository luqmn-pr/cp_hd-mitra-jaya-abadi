<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Mitra & Klien')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Klien / Mitra')
                            ->placeholder('Contoh: Universitas Padjadjaran')
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('logo')
                            ->label('Logo Mitra (PNG Transparan disarankan)')
                            ->image()
                            ->directory('partners'),

                        TextInput::make('website_url')
                            ->label('Tautan Website Resmi')
                            ->placeholder('https://unpad.ac.id')
                            ->url()
                            ->maxLength(255),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),
                    ]),
            ]);
    }
}
