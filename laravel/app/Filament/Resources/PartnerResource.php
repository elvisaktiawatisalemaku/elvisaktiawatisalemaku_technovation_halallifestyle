<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-external-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->required()
                        ->image()
                        ->disk('public')
                        ->directory('thumbnails')  // Menentukan direktori untuk file upload
                        ->maxSize(1024)  // Maksimal ukuran file 1MB (opsional)
                        ->enableOpen()->enableDownload(),  // Opsi untuk membuka dan mengunduh file
                    Forms\Components\RichEditor::make('content')
                        ->required(),
                    Forms\Components\TextInput::make('link')
                        ->required()
                        ->maxLength(255),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                ImageColumn::make('thumbnail')->disk('public'),  // Menambahkan disk untuk ImageColumn
                TextColumn::make('link')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make()->after(function (Collection $records) {
                    foreach ($records as $record) {
                        if ($record->thumbnail) {
                            Storage::disk('public')->delete($record->thumbnail);  // Perbaiki penggunaan Storage
                        }
                    }
                }),
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
