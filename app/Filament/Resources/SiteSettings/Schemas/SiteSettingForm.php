<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Identitas & Legalitas Perusahaan')
                        ->columnSpan(2)
                        ->schema([
                            TextInput::make('company_name')
                                ->label('Nama Perusahaan')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('tagline')
                                ->label('Tagline / Slogan')
                                ->maxLength(255),

                            Grid::make(2)->schema([
                                TextInput::make('director_name')
                                    ->label('Nama Direktur')
                                    ->placeholder('Contoh: Devi Indriyani'),

                                TextInput::make('director_title')
                                    ->label('Jabatan Pimpinan')
                                    ->default('Direktur'),
                            ]),

                            Grid::make(3)->schema([
                                TextInput::make('nib')
                                    ->label('Nomor Induk Berusaha (NIB)')
                                    ->placeholder('2008210031124'),

                                TextInput::make('notary_deed')
                                    ->label('Akta Pendirian Notaris')
                                    ->placeholder('Tina Martina, S.H., M.KN.'),

                                TextInput::make('established_date')
                                    ->label('Waktu Pendirian')
                                    ->placeholder('Agustus 2021'),
                            ]),

                            Grid::make(2)->schema([
                                TextInput::make('email')
                                    ->label('Email Kontak')
                                    ->email()
                                    ->required(),

                                TextInput::make('whatsapp')
                                    ->label('Nomor WhatsApp')
                                    ->placeholder('+62 812-xxxx-xxxx'),
                            ]),

                            Grid::make(2)->schema([
                                TextInput::make('phone')
                                    ->label('Nomor Telepon Kantor')
                                    ->placeholder('+62 22 xxxxxxx'),

                                TextInput::make('google_maps_url')
                                    ->label('URL Google Maps Embed')
                                    ->placeholder('https://maps.google.com/maps?...'),
                            ]),

                            Textarea::make('address')
                                ->label('Alamat Kantor & Workshop')
                                ->rows(3),

                            Textarea::make('footer_description')
                                ->label('Deskripsi Footer')
                                ->rows(3),

                            Repeater::make('social_links')
                                ->label('Tautan Media Sosial')
                                ->schema([
                                    TextInput::make('platform')
                                        ->label('Platform')
                                        ->placeholder('Instagram, Facebook, LinkedIn, TikTok'),
                                    TextInput::make('url')
                                        ->label('URL Profil')
                                        ->placeholder('https://...'),
                                ])
                                ->columns(2)
                                ->collapsible()
                                ->defaultItems(0),
                        ]),

                    Section::make('Logo & Favicon')
                        ->columnSpan(1)
                        ->schema([
                            FileUpload::make('logo')
                                ->label('Logo Utama Website')
                                ->image()
                                ->directory('settings/logo')
                                ->helperText('Format PNG transparan disarankan (tinggi ~40px).'),

                            FileUpload::make('favicon')
                                ->label('Favicon Tab Browser')
                                ->image()
                                ->directory('settings/favicon')
                                ->helperText('Format ICO atau PNG (32x32 px).'),
                        ]),
                ]),
            ]);
    }
}
