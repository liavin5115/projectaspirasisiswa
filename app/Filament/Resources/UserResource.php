<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Actions;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationLabel = 'Pengguna Admin';
    protected static ?string $singularModelLabel = 'Pengguna';
    protected static ?string $pluralModelLabel = 'Pengguna';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d-m-Y H:i'),
            ])
            ->filters([
                //
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
            'index' => \App\Filament\Resources\UserResource\Pages\ListUsers::route('/'),
            'edit' => \App\Filament\Resources\UserResource\Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
