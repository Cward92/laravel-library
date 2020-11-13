<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function genres()
    {
        return$this->belongsToMany(Genre::class);
    }
}
