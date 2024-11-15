<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['reservation_email','reservation_time', 'book_id' ,'reservation_backtime'];

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
