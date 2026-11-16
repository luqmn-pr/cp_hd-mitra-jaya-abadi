<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Rincian Pesan Klien')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Nama Pengirim')
                                ->disabled(),

                            TextInput::make('email')
                                ->label('Email Pengirim')
                                ->disabled(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('phone')
                                ->label('Telepon / WhatsApp')
                                ->disabled(),

                            TextInput::make('service_name')
                                ->label('Layanan Diminati')
                                ->disabled(),
                        ]),

                        TextInput::make('subject')
                            ->label('Subjek')
                            ->disabled(),

                        Textarea::make('message')
                            ->label('Isi Pesan')
                            ->rows(6)
                            ->disabled(),

                        Grid::make(2)->schema([
                            Toggle::make('is_read')
                                ->label('Tandai Sudah Dibaca')
                                ->default(false),

                            TextInput::make('created_at')
                                ->label('Waktu Masuk')
                                ->disabled(),
                        ]),
                    ]),
            ]);
    }
}
