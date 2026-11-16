<?php

namespace App\Filament\Resources\HomepageSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomepageSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Bagian Beranda')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('section_key')
                                ->label('Kunci Bagian (Section Key)')
                                ->disabled(fn (string $operation): bool => $operation === 'edit')
                                ->required()
                                ->helperText('Kunci sistem (contoh: hero, about_intro, cta).'),

                            TextInput::make('subtitle')
                                ->label('Label Kecil / Subtitle')
                                ->placeholder('Contoh: TENTANG KAMI'),
                        ]),

                        TextInput::make('title')
                            ->label('Judul Utama Bagian')
                            ->required(),

                        Textarea::make('description')
                            ->label('Deskripsi / Teks Paragraf')
                            ->rows(4),

                        Grid::make(2)->schema([
                            TextInput::make('button_label')
                                ->label('Teks Tombol CTA')
                                ->placeholder('Contoh: Jelajahi Layanan'),

                            TextInput::make('button_url')
                                ->label('Tautan Tombol')
                                ->placeholder('/layanan'),
                        ]),

                        Grid::make(2)->schema([
                            FileUpload::make('image')
                                ->label('Gambar Ilustrasi / Banner')
                                ->image()
                                ->directory('homepage/sections'),

                            TextInput::make('sort_order')
                                ->label('Urutan Tampil')
                                ->numeric()
                                ->default(0),
                        ]),
                    ]),
            ]);
    }
}
