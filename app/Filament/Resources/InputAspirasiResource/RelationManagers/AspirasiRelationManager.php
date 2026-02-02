<?php

namespace App\Filament\Resources\InputAspirasiResource\RelationManagers;

use Filament\Actions;
use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class AspirasiRelationManager extends RelationManager
{
    protected static string $relationship = 'aspirasi';
    protected static ?string $recordTitleAttribute = 'id';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Proses' => 'Proses',
                        'Selesai' => 'Selesai',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('feedback')
                    ->label('Feedback/Respon')
                    ->rows(5),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Menunggu' => 'warning',
                        'Proses' => 'info',
                        'Selesai' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('feedback')
                    ->label('Feedback')
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Update')
                    ->dateTime('d-m-Y H:i'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Actions\CreateAction::make()
                    ->label('Tambah Follow-up'),
            ])
            ->actions([
                Actions\EditAction::make()
                    ->label('Edit Follow-up'),
                Actions\DeleteAction::make()
                    ->label('Hapus Follow-up'),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
