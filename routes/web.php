<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tere', function () {

    $authors = Author::all();

    $authors->load('books.reviews', 'reviews');

    //  $books = [];

    //  foreach ($authors as $author) {
    //     $books = array_merge($books, $author->books->toarray());
    //  }

    return view('tere', [
        'authors' => $authors,
    ]);

});

//     $query = DB::table('books')->get();

//     $quearyRaw = DB::select('SELECT * FROM BOOKS WHERE ID = 1');

//     $authorWithCount = DB::select('SELECT
// 	a.name,
// 	count(b.id) book_count
// FROM
// 	authors a
// 	LEFT JOIN books b ON a.id = b.author_id
// GROUP BY
// 	a.id;
// ');

//     $book = Book::find(1);

//     $authorsBooks = Author::withCount('books')->get();

//     $author = Author::find(1);

//     $authorBooks = $author->books;

//     $bookAuthor = $book->author;

//     $authorWithBooks = Author::with('books')->get();

//     return $authorWithBooks;
