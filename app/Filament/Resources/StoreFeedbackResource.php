<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StoreFeedbackResource\Pages;
use App\Filament\Resources\StoreFeedbackResource\RelationManagers;
use App\Models\Store_Feedback;
use App\Models\StoreFeedback;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StoreFeedbackResource extends Resource
{
    protected static ?string $model = Store_Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('feedback_status')
                ->options([
                    'seen' => 'seen',
                    'unseen' => 'unseen',
                
                ])
                ->default('unseen')
                ->disablePlaceholderSelection()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('subject'),
                Tables\Columns\TextColumn::make('feedback_status')->sortable(),
                Tables\Columns\TextColumn::make('feedback'),
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
            'index' => Pages\ListStoreFeedback::route('/'),
            'create' => Pages\CreateStoreFeedback::route('/create'),
            'edit' => Pages\EditStoreFeedback::route('/{record}/edit'),
        ];
    }    
}
