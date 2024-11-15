<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $topics = Topic::all();
        return view('books.bookadd', compact('topics'));
    }

    public function store(Request $request){
        $request->validate(
            [
                'topic_id' => 'integer|exists:topics,id',
                'book_genre' => 'required|string',
                'book_title' => 'required|string|max:255',
                'book_year'=> 'required|date',
            ],
        );

        $book = Book::create([
            'topic_id' => $request->topic_id,
            'book_title' => $request->book_title,
            'book_genre' => $request->book_genre,
            'book_year' => $request->book_year,
        ]);

        return redirect()->back()->with('success', 'BOOK stored.');
    }

    

}
