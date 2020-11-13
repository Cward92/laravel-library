<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkouts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        "checked_out_on", 
        "user_id", 
        "book_id", 
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function users()
    {
        return$this->hasOne(User::class);
    }
}