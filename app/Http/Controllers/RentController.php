<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
use App\Book;

class RentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $query = Rent::all();
        // dd($query);
        return view('rents.index',['data' => $query]);
    }

    public function create()
    {
        return view('rents.create');
    }

    public function show()
    {
        return view('rents.show');
    }
}
