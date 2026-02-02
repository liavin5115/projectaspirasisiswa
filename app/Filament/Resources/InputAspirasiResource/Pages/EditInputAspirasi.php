<?php

namespace App\Filament\Resources\InputAspirasiResource\Pages;

use App\Filament\Resources\InputAspirasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInputAspirasi extends EditRecord
{
    protected static string $resource = InputAspirasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getFormActions(): array
    {
        return [];
    }

    protected function getFooterActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('← Kembali')
                ->url(route('filament.admin.resources.input-aspirasis.index'))
                ->color('gray'),
        ];
    }
}
