<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Author;

class BookAuthor extends Model
{
    use HasFactory;
    protected $table = 'book_author';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

}