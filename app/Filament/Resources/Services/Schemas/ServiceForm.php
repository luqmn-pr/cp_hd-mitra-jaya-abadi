<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Informasi Utama')
                        ->columnSpan(2)
                        ->schema([
                            Grid::make(2)->schema([
                                TextInput::make('name')
                                    ->label('Nama Layanan')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                                TextInput::make('slug')
                                    ->label('Slug URL')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                            ]),

                            Textarea::make('short_description')
                                ->label('Deskripsi Singkat')
                                ->rows(3)
                                ->required()
                                ->helperText('Ditampilkan pada kartu layanan di beranda dan daftar layanan.'),

                            RichEditor::make('description')
                                ->label('Deskripsi Lengkap')
                                ->helperText('Rincian layanan yang ditampilkan pada halaman detail.'),

                            Repeater::make('features')
                                ->relationship('features')
                                ->label('Daftar Fitur / Produk Layanan')
                                ->schema([
                                    TextInput::make('title')
                                        ->label('Judul Fitur / Produk')
                                        ->required(),
                                    TextInput::make('description')
                                        ->label('Keterangan Singkat'),
                                    TextInput::make('sort_order')
                                        ->label('Urutan')
                                        ->numeric()
                                        ->default(0),
                                ])
                                ->columns(3)
                                ->collapsible()
                                ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                ->defaultItems(1),
                        ]),

                    Section::make('Pengaturan & Media')
                        ->columnSpan(1)
                        ->schema([
                            Toggle::make('is_active')
                                ->label('Status Aktif')
                                ->default(true)
                                ->helperText('Jika nonaktif, tidak akan tampil di publik.'),

                            Toggle::make('is_featured')
                                ->label('Layanan Unggulan')
                                ->default(true),

                            TextInput::make('sort_order')
                                ->label('Urutan Tampil')
                                ->numeric()
                                ->default(0),

                            FileUpload::make('thumbnail')
                                ->label('Foto Thumbnail')
                                ->image()
                                ->directory('services/thumbnails'),

                            FileUpload::make('hero_image')
                                ->label('Foto Sampul / Banner')
                                ->image()
                                ->directory('services/banners'),

                            TextInput::make('meta_title')
                                ->label('Meta Title (SEO)'),

                            Textarea::make('meta_description')
                                ->label('Meta Description (SEO)')
                                ->rows(2),
                        ]),
                ]),
            ]);
    }
}
