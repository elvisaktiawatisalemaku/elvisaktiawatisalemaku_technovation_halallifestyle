<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form->schema([
            // Define the form schema here
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label'),
                TextColumn::make('value')->limit(40),
            ])
            ->filters([
                // Define table filters here
            ])
            ->actions([
                EditAction::make()->form(function (Setting $record) {
                    switch ($record->type) {
                        case 'text':
                            return [Forms\Components\TextInput::make('value')->label($record->label)];
                        case 'longtext':
                            return [Forms\Components\RichEditor::make('value')->label($record->label)];
                        default:
                            return [];
                    }
                }),

                // Uncomment the line below if the delete action is needed
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Uncomment the line below if bulk delete action is needed
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }
}
