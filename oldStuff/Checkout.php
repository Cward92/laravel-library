<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkout';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    
    public function book() 
    {
        return $this->belongsTo('App\Models\Books', 'ref_book_id'); // copied
    }
    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'ref_user_id'); // copied
    }
}
