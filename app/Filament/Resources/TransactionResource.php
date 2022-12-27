<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('payment_id')
                    ->required(),
                    Forms\Components\Select::make('transaction_status')
                    ->options([
                        'Belum Terkonfirmasi' => 'Belum Terkonfirmasi',
                        'Diproses' => 'Diproses',
                        'Proses Pengiriman' => 'Proses Pengiriman',
                        'Selesai' => 'Selesai',
                    ])
                    ->default('Belum Terkonfirmasi')
                    ->disablePlaceholderSelection(),
                Forms\Components\TextInput::make('no_resi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_price'),
                Forms\Components\FileUpload::make('bukti_pembayaran')
                        ->required()
                        ->directory('paymentphoto')
                        ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('adress_id'),
                Tables\Columns\TextColumn::make('payment_id'),
                Tables\Columns\TextColumn::make('transaction_status'),
                Tables\Columns\TextColumn::make('no_resi'),
                Tables\Columns\TextColumn::make('total_price'),
                Tables\Columns\ImageColumn::make('bukti_pembayaran'), 
                Tables\Columns\TextColumn::make('full_street_adress'),
                Tables\Columns\TextColumn::make('postal_code'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                
            ])

            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\ViewAction::make()->url('/single-product/{1}'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getCards(): array
    {
        return [
            Card::make('user_id', 'adress_id'),

        ];
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\TransactiondetailsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
