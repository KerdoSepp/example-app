<?php
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tere', function(){

    $query = DB::table('books')->get();

    $quearyRaw = DB::select("SELECT * FROM BOOKS WHERE ID = 1");

    $authorWithCount = DB::select("SELECT
	a.name,
	count(b.id) book_count
FROM
	authors a
	LEFT JOIN books b ON a.id = b.author_id
GROUP BY
	a.id;
");
    
    $book = Book::find(1);

    $authorsBooks = Author::withCount("books")->get();

    $author = Author::find(1);    

    $authorBooks = $book->author;

    $bookAuthor = $author->book;

     $authorWithBooks = Author::with("books")->get();

    return $authorWithBooks;
});