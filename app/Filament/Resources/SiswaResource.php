<?php

namespace App\Filament\Resources;

use App\Models\Siswa;
use Filament\Actions;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationLabel = 'Manajemen NIS';

    protected static ?string $singularModelLabel = 'NIS';

    protected static ?string $pluralModelLabel = 'NIS Siswa';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nis')
                    ->label('NIS')
                    ->searchable()
                    ->sortable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('kelas')
                    ->label('Kelas')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Terdaftar Pada')
                    ->dateTime('d F Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Actions\EditAction::make()
                    ->label('Edit'),
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
            'index' => \App\Filament\Resources\SiswaResource\Pages\ListSiswas::route('/'),
            'create' => \App\Filament\Resources\SiswaResource\Pages\CreateSiswa::route('/create'),
            'edit' => \App\Filament\Resources\SiswaResource\Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
