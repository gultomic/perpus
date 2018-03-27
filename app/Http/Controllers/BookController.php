<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc');
        $categoryId = Input::get('cat', false);
        $search = Input::get('find', false);

        $query['category'] = \App\Category::where('type', 1)->get();
        // $query['books'] = Book::orderBy('id', 'desc')->paginate(10);

        if($categoryId){
            $books = Book::where('category_id', $categoryId);
        }
        if($search){
            $books = Book::where('name', 'like', '%'.$search.'%');
        }
        // dd($books);
        $query['record'] = $books->count();
        $query['books'] = $books->paginate(10);
        
        return view('books.index', ['data' => $query]);
    }

    public function show($id)
    {
        $query = Book::findOrFail($id);
        
        $result = collect($query)
        ->merge([
            'available' => $query->amount - $query->damage - $query->borrowed,
            'category' => $query->category->name,
            'location' => $query->location->name,
        ])
        ->all();

        // return response()->json($result);
        return view('books.show', ['data' => $result]);
    }

    public function data()
    {
        $query = Book::all();
        // ->select('id','name')
        // ->get();
        dd($query);
        return response()->json($query->category);
    }
}
