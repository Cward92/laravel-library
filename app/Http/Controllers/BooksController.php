<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return Book::all();
  
    }

    public function show($book)
    {
        return Book::findOrFail($book);
    }

    public function store()
    {
        return Book::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'isbn' => request('isbn'),
            'pages' => request('pages'),
            'value' => request('value'),
            'cost' => request('cost'),
            'released' => request('released')
        ]);
    }

    public function update($book)
    {
        $book = Book::find($book);
        $book->title = request('title');
        $book->excerpt = request('excerpt');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->value = request('value');
        $book->cost = request('cost');
        $book->released = request('released');

        $book->save();
    }

    public function destroy($book)
    {
        $book = Book::find($book);
        $book->delete();
    }

}