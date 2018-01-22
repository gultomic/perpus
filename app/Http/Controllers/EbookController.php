<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ebook;

class EbookController extends Controller
{
    public function index()
    {
        $query = Ebook::all();
        $result = $query->map(function($item){
            return [
                'id' => $item->id,
                'name' => $item->name,
                'cover' => 'storage/ebooks/' . $item->folder . '/pages/1.jpg'
            ];
        });
        // dd($result->all());
        return view('ebooks.index', ['data' => $result]);
    }

    public function show($id)
    {
        $query = EBook::findOrFail($id);
        
        // $result = collect($query)
        // ->merge([
        //     // 'available' => $query->amount - $query->damage - $query->borrowed,
        //     'category' => $query->category->name,
        //     'location' => $query->location->name,
        // ])
        // ->all();

        // return response()->json($result);
        return view('ebooks.show');
    }
}
