<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ebook;

class EbookController extends Controller
{
    public function index()
    {
        $ebooks = Ebook::orderBy('id', 'desc');
        $categoryId = Input::get('cat', false);
        $search = Input::get('find', false);
        
        $query['category'] = \App\Category::where('type', 1)->get();
        
        if($categoryId){
            $ebooks = Ebook::where('category_id', $categoryId);
        }
        
        if($search){
            $ebooks = Ebook::where('name', 'like', '%'.$search.'%');
        }
        
        $query['record'] = $ebooks->count();
        $query['ebooks'] = $ebooks->paginate(10);
        // dd($ebooks->name);
        return view('ebooks.index', ['data' => $query]);
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

    public function single($id)
    {
        $query = EBook::findOrFail($id);
        $result = collect($query)->merge([
            'cover' => 'storage/ebooks/'.$query->folder.'/pages/1.jpg'
        ])->all();

        return response()->json($result);
    }
}
