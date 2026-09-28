<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tere', function () {

    $book = Book::find(1);

    $authorsBooks = Author::withCount('books')->get();

    $author = Author::find(1);

    $authorBooks = $author->books;

    $bookAuthor = $book->author;

    $authorWithBooks = Author::with('books')->get();

    return $authorWithBooks;
});
