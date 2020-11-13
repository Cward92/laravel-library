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
        return Book::findOrFail($book)->get();
    }

}