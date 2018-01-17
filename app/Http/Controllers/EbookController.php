<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ebook;

class EbookController extends Controller
{
    public function index()
    {
        $query = 'blon ada';

        return view('ebooks.index', ['data' => $query]);
    }
}
