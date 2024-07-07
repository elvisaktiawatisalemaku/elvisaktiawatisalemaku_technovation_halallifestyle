<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;  // Import Storage Facade

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

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