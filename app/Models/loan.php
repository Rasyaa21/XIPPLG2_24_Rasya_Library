<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'loan_date',
        'return_date'
    ];

    public function book(){
        return $this->belongsTo(book::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
