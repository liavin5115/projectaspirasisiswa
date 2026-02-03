<?php

namespace App\Filament\Resources;

use App\Models\InputAspirasi;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class InputAspirasiResource extends Resource
{
    protected static ?string $model = InputAspirasi::class;
    protected static ?string $navigationLabel = 'Aspirasi Masuk';
    protected static ?string $singularModelLabel = 'Aspirasi';
    protected static ?string $pluralModelLabel = 'Aspirasi';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID Aspirasi')
                    ->badge()
                    ->color('primary')
                    ->copyable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nis')
                    ->label('NIS'),
                Tables\Columns\TextColumn::make('kategori')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('lokasi')
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d-m-Y H:i'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'Fasilitas' => 'Fasilitas',
                        'Keamanan' => 'Keamanan',
                        'Kebersihan' => 'Kebersihan',
                        'Pembelajaran' => 'Pembelajaran',
                        'Lainnya' => 'Lainnya',
                    ]),
            ])
            ->searchable(['nis', 'kategori', 'lokasi', 'keterangan'])
            ->actions([
                Actions\EditAction::make()
                    ->label('Follow Up'),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('nis')
                    ->label('NIS (Nomor Induk Siswa)')
                    ->disabled(),
                Forms\Components\TextInput::make('kategori')
                    ->label('Kategori')
                    ->disabled(),
                Forms\Components\TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->disabled(),
                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan/Deskripsi')
                    ->disabled()
                    ->columnSpanFull(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            \App\Filament\Resources\InputAspirasiResource\RelationManagers\AspirasiRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\InputAspirasiResource\Pages\ListInputAspirasis::route('/'),
            'view' => \App\Filament\Resources\InputAspirasiResource\Pages\ViewInputAspirasi::route('/{record}'),
            'edit' => \App\Filament\Resources\InputAspirasiResource\Pages\EditInputAspirasi::route('/{record}/edit'),
        ];
    }
}
