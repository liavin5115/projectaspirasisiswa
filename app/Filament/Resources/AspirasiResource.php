<?php

namespace App\Filament\Resources;

use App\Models\Aspirasi;
use Filament\Actions;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AspirasiResource extends Resource
{
    protected static ?string $model = Aspirasi::class;
    protected static ?string $navigationLabel = 'Follow-up Aspirasi';
    protected static ?string $singularModelLabel = 'Follow-up';
    protected static ?string $pluralModelLabel = 'Follow-up';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('inputAspirasi.nis')
                    ->label('NIS'),
                Tables\Columns\TextColumn::make('inputAspirasi.kategori')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Menunggu' => 'warning',
                        'Proses' => 'info',
                        'Selesai' => 'success',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d-m-Y H:i'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Proses' => 'Proses',
                        'Selesai' => 'Selesai',
                    ]),
            ])
            ->actions([
                Actions\Action::make('edit')
                    ->label('Edit')
                    ->icon('heroicon-o-pencil'),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\AspirasiResource\Pages\ListAspirasis::route('/'),
            'edit' => \App\Filament\Resources\AspirasiResource\Pages\EditAspirasi::route('/{record}/edit'),
        ];
    }
}
