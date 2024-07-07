<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionResource\Pages;
use App\Filament\Resources\SectionResource\RelationManagers;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;  // Import Storage Facade

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-alt';

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
                    Forms\Components\Select::make('post_as')
                        ->options([
                            'JUMBOTRON' => 'JUMBOTRON',
                            'ABOUT' => 'ABOUT',
                        ])
                        ->required(),  // Menambahkan validasi agar field ini diperlukan
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')->disk('public'),  // Menambahkan disk untuk ImageColumn
                Tables\Columns\TextColumn::make('post_as')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                // Define your table filters here
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
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
            // Define your relations here
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}