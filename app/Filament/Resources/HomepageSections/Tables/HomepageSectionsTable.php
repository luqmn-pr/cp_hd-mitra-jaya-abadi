<?php

namespace App\Filament\Resources\HomepageSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomepageSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_key')
                    ->label('Kunci Bagian')
                    ->badge()
                    ->sortable(),

                TextColumn::make('title')
                    ->label('Judul Bagian')
                    ->searchable()
                    ->weight('bold')
                    ->limit(40),

                TextColumn::make('subtitle')
                    ->label('Subtitle / Tag')
                    ->color('gray'),

                TextColumn::make('button_label')
                    ->label('Tombol')
                    ->placeholder('-'),

                TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
