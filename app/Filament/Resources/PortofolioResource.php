<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortofolioResource\Pages;
use App\Filament\Resources\PortofolioResource\RelationManagers;
use App\Models\Portofolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Input untuk nama portofolio
            Forms\Components\TextInput::make('nama')
                ->label('Nama Portofolio')
                ->required()
                ->maxLength(255),

            // Input untuk deskripsi
            Forms\Components\Textarea::make('deskripsi')
               ->label('Deskripsi')
                ->required()
                ->maxLength(1000),

            // Upload gambar portofolio
            Forms\Components\FileUpload::make('gambar')
                ->label('Gambar')
                ->image()
                ->required(),

            // Input untuk link portofolio
            Forms\Components\TextInput::make('link')
                ->label('Link')
                ->url() // Memastikan input berupa URL
                ->nullable()
                ->maxLength(255),

            // Dropdown untuk kategori
            Forms\Components\Select::make('kategori')
                ->label('Kategori')
                ->options([
                    'Design' => 'Design',
                    'UI/UX' => 'UI/UX',
                    'App/Web' => 'App/Web',
                ])
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            // Menampilkan nama portofolio
            Tables\Columns\TextColumn::make('nama')
                ->label('Nama Portofolio')
                ->sortable()
                ->searchable(),

            // Menampilkan deskripsi portofolio (hanya sebagian)
           Tables\Columns\TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->limit(50) // Menampilkan 50 karakter pertama dari deskripsi
                ->sortable()
                ->searchable(),

            // Menampilkan gambar portofolio
            Tables\Columns\ImageColumn::make('gambar')
                ->label('Gambar')
                ->disk('public') // Menentukan disk yang digunakan
                ->height(60) // Menentukan tinggi gambar
                ->width(100), // Menentukan lebar gambar

            // Menampilkan link portofolio
            Tables\Columns\TextColumn::make('link')
                ->label('Link')
                ->url(fn ($record) => $record->link) // Membuat link dapat diklik
                ->sortable(),

            // Menampilkan kategori portofolio
            Tables\Columns\TextColumn::make('kategori')
                ->label('Kategori')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Date')
                ->date()
                ->sortable(),
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
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
        ];
    }
}
