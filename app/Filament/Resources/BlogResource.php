<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nama_user')
                ->label('Nama User')
                ->required(),
            Forms\Components\TextInput::make('judul')
                ->label('Judul')
                ->required(),
            Forms\Components\FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->required(),
            Forms\Components\RichEditor::make('isi')
                ->label('Isi Blog')
                ->required(),
            Forms\Components\TextInput::make('kategori')
                ->label('Kategori')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama_user')
            ->label('Nama User')
            ->searchable()
            ->sortable(),
        Tables\Columns\TextColumn::make('judul')
            ->label('Judul')
            ->searchable()
            ->sortable(),
        Tables\Columns\TextColumn::make('kategori')
            ->label('Kategori')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
