<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Rincian Proyek')
                        ->columnSpan(2)
                        ->schema([
                            Grid::make(2)->schema([
                                TextInput::make('title')
                                    ->label('Judul Proyek / Portfolio')
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

                            Grid::make(2)->schema([
                                Select::make('service_id')
                                    ->label('Kategori Layanan')
                                    ->relationship('service', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                TextInput::make('client_name')
                                    ->label('Nama Klien / Institusi')
                                    ->placeholder('Contoh: Universitas Padjadjaran'),
                            ]),

                            Textarea::make('excerpt')
                                ->label('Ringkasan Proyek')
                                ->rows(3)
                                ->helperText('Ditampilkan pada kartu portfolio di halaman depan.'),

                            RichEditor::make('description')
                                ->label('Deskripsi Lengkap Pekerjaan'),

                            Repeater::make('images')
                                ->relationship('images')
                                ->label('Galeri Foto Dokumentasi')
                                ->schema([
                                    FileUpload::make('path')
                                        ->label('Foto')
                                        ->image()
                                        ->directory('portfolio/gallery')
                                        ->required(),
                                    TextInput::make('caption')
                                        ->label('Keterangan Foto'),
                                    TextInput::make('sort_order')
                                        ->label('Urutan')
                                        ->numeric()
                                        ->default(0),
                                ])
                                ->columns(3)
                                ->collapsible()
                                ->defaultItems(0),
                        ]),

                    Section::make('Publikasi & Media')
                        ->columnSpan(1)
                        ->schema([
                            FileUpload::make('cover_image')
                                ->label('Foto Sampul Utama')
                                ->image()
                                ->directory('portfolio/covers'),

                            Select::make('status')
                                ->label('Status')
                                ->options([
                                    'draft' => 'Draft',
                                    'published' => 'Dipublikasikan',
                                    'archived' => 'Diarsipkan',
                                ])
                                ->default('published')
                                ->required(),

                            Toggle::make('is_featured')
                                ->label('Tampilkan di Beranda')
                                ->default(false),

                            DatePicker::make('project_date')
                                ->label('Tanggal / Waktu Proyek')
                                ->default(now()),

                            DateTimePicker::make('published_at')
                                ->label('Waktu Publikasi')
                                ->default(now()),

                            TextInput::make('sort_order')
                                ->label('Urutan Tampil')
                                ->numeric()
                                ->default(0),

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
