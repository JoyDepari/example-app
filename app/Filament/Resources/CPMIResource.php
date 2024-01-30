<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CPMIResource\Pages;
use App\Filament\Resources\CPMIResource\RelationManagers;
use App\Models\CPMI;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CPMIResource extends Resource
{
    protected static ?string $model = CPMI::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('NIK'),
                Forms\Components\TextInput::make('Tempat Lahir'),
                Forms\Components\DatePicker::make('date_of_birth')
                ->required()
                ->maxDate(now()),
                Forms\Components\TextInput::make('Provinsi'),
                Forms\Components\TextInput::make('Kabupaten'),
                Forms\Components\TextInput::make('Alamat'),
                Forms\Components\TextInput::make('Status'),
                Forms\Components\TextInput::make('Nama Ibu'),
                Forms\Components\TextInput::make('Nama Ayah'),
                Forms\Components\TextInput::make('Alamat'),
                Forms\Components\TextInput::make('Nama Kontak Darurat'),
                Forms\Components\TextInput::make('Hubungan'),
                Forms\Components\TextInput::make('No Telepon'),
                Forms\Components\TextInput::make('No Email'),
                Forms\Components\TextInput::make('Alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('phone'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCPMIS::route('/'),
            'create' => Pages\CreateCPMI::route('/create'),
            'edit' => Pages\EditCPMI::route('/{record}/edit'),
        ];
    }
}
