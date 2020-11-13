<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAuthor;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function book_author()
    {
        return $this->belongsToMany(BookAuthor::class);
    }

}