<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->rounded('md'),

                TextColumn::make('company_name')
                    ->label('Nama Perusahaan')
                    ->weight('bold'),

                TextColumn::make('email')
                    ->label('Email'),

                TextColumn::make('whatsapp')
                    ->label('WhatsApp'),

                TextColumn::make('phone')
                    ->label('Telepon'),

                TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y H:i'),
            ])
            ->recordActions([
                EditAction::make()->label('Ubah Pengaturan'),
            ]);
    }
}
