<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use App\Filament\Resources\PartnerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;  // Import Storage Facade

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function ($record) {  // Parameter $record tidak perlu diberi tipe khusus
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);  // Perbaiki penggunaan Storage
                    }
                }
            ),
        ];
    }
}