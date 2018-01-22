<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $query = Book::paginate(10);
        // dd($query);
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

        return response()->json($result);
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
