<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookAuthor;

class BookAuthorsController extends Controller
{
    public function index()
    {

        return BookAuthor::all();
  
    }

    public function show($bookAuthorId)
    {
        return BookAuthor::findOrFail($bookAuthorId)->get();
    }

    public function indexWithAll()
    {

        return BookAuthor::with('authors', 'books')->get();
  
    }
}
