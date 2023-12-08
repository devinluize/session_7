<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class datacontroller extends Controller
{
    //
    public function store_book(Request $request){
        // dd($request->title);
        $bukubaru = Book::create([
            'title'=>$request->title,
            'author'=>$request->author
        ]);
        return redirect()->route('view_book');
        // dump($bukubaru);
    }
    public function updatebook($id){
        $data = Book::find($id);
        return view();
    }
    public function deletebook($id){
        $bukutodeleted = Book::find($id);
        $bukutodeleted->delete();
        return redirect()->route('view_book');
    }
    public function view_book(){
        $books=Book::all();
        $title="tes title";
        return view('viewbook',compact('books','title'));
        // dd($books);
    }
    public function regis($lang){
        App::setLocale($lang);
        return view('regis');
    }
}
