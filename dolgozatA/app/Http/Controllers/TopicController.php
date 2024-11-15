<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        return view('topics.create');
    }

    public function store(Request $request){
        $request->validate(
            ['topic_book_genre' => 'required|string'],
        );

        Topic::create($request->all());
        return redirect()->back()->with('success', 'GENRE stored.');
    }

}

class TopicController extends Controller
{
       
}
