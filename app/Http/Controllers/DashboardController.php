<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DashboardController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = \App\Rent::with('user', 'book')
            ->orderBy('updated_at', 'desc')
            ->get();

        $records['rents'] = $rents->map(function($item){
            return [
                'id' => $item->id,
                'user' => $item->user->name,
                'book' => $item->book->name,
                'status' => $item->note,
                'date' => $item->updated_at->format('H:m d-M-Y')
            ];
        });

        $records['books'] = \App\Book::sum('amount');
        $records['users'] = \App\User::count();
  
        return view('admin.dashboard', ['records' => $records]);
    }

    public function info()
    {
        $data['users'] = App\User::all();
        
        return response()->json($data);
    }
}
