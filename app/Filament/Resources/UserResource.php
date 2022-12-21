<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
        Forms\Components\TextInput::make('name')
        ->required()
        ->maxLength(255),
    Forms\Components\FileUpload::make('profile_pic')
        ->required()
        ->directory('users_image')
        ->image(),
    Forms\Components\TextInput::make('email')
        ->required()
        ->maxLength(255),
    Forms\Components\TextInput::make('whatasapp_number')
       ,
        Forms\Components\TextInput::make('umur')
       ,
        Forms\Components\Select::make('status')
                ->options([
                    'user' => 'user',
                    'admin' => 'admin',
                
                ])
                ->default('user')
                ->disablePlaceholderSelection(),
        Forms\Components\TextInput::make('username')
        ->required(),

            ]);
        

            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('username')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('profile_pic'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('whatsapp_number'),
                Tables\Columns\TextColumn::make('umur'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
