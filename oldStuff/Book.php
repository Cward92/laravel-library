<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAuthor;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function book_author()
    {
        return $this->hasMany(BookAuthor::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
