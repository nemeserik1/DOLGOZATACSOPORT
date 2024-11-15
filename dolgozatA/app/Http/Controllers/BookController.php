<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('topics.genre');
    }
}
