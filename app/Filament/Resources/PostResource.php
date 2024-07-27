<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $label = 'Post';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Judul Berita')
                    ->reactive()
                    ->lazy()
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->required(),
                Select::make('category')
                    ->required()
                    ->label('Kategori Berita')
                    ->options([
                        'Olahraga' => 'Olahraga',
                        'Agama' => 'Agama',
                        'KKN' => 'KKN',
                        'Kesehatan' => 'Kesehatan',
                        'Pendidikan' => 'Pendidikan',
                        'Geografis' => 'Geografis',
                        'Organisasi' => 'Organisasi',
                        'UMKM' => 'UMKM',
                    ]),
                RichEditor::make('body')
                    ->required()
                    ->label('Deskripsi/Body')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'codeBlock',
                        'h2',
                        'h3',
                        'h4',
                        'alignLeft',
                        'alignCenter',
                        'alignRight',
                    ]),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->disk('upload')
                    ->image()
                    ->directory('posts')
                    ->imageEditor(),
                TextInput::make('youtube_url')
                    ->label('YouTube URL')
                    ->url()
                    ->nullable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Judul Berita')->sortable()->searchable(),
                TextColumn::make('slug')->label('Slug')->sortable()->searchable(),
                TextColumn::make('category')->label('Kategori Berita')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Dibuat Pada')->sortable(),
                ImageColumn::make('image_url')
                    ->label('Gambar')
                    ->disk('upload')
                    ->width(200)
                    ->height(100),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
