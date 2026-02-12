<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationLabel = 'Bidang Ilmu/Subjek';
    protected static ?string $pluralModelLabel = 'Bidang Ilmu/Subjek';
    protected static ?string $modelLabel = 'Bidang Ilmu/Subjek';

    protected static ?string $navigationGroup = 'Koleksi';
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $slug = 'buku';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('cover')
    ->image()
    ->disk('public')
    ->directory('books/covers')
    ->visibility('public'),


            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\TextInput::make('author')->required(),
            Forms\Components\Select::make('category')
                ->label('Kategori Buku')
                ->options([
                    'ekobit' => 'Ekonomi,Bisnis & Teknologi',
                    'buku' => 'Buku Umum',
                    'biofarmi' => 'Bioteknologi,Farmasi,Mikrobiologi',
                    'tajabat' => 'Tanaman,Jamu,Obat & Gizi',
                ])
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('pages')->numeric(),
            Forms\Components\TextInput::make('ddc_code'),
            Forms\Components\TextInput::make('location'),
            Forms\Components\TextInput::make('isbn_issn'),

            Forms\Components\Textarea::make('description')->columnSpanFull(),

            Forms\Components\FileUpload::make('pdf_file')
                ->label('PDF Buku')
                ->disk('public')
                ->directory('books/pdf')
                ->acceptedFileTypes(['application/pdf']),
        ]);
    }

   public static function table(Table $table): Table
{
    return $table
      ->modifyQueryUsing(fn ($query) =>
    $query->where('type', 'book'))

         ->columns([
           ImageColumn::make('cover')
                ->label('Cover')
                ->getStateUsing(fn ($record) => asset('storage/' . $record->cover))
                ->height(100)
                ->square(),


            Tables\Columns\TextColumn::make('title')
                ->searchable(),

            Tables\Columns\TextColumn::make('author'),

            Tables\Columns\TextColumn::make('ddc_code'),
              Tables\Columns\TextColumn::make('category')
                ->label('Kategori')
                ->badge()
                ->sortable(),

        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
