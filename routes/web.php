<?php
Route::get('/', function(){
    return view('landing');
});
Route::resource('book', 'BookController');
Route::resource('ebook', 'EbookController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('admin')->group(function(){
    Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');
    // RENTS
    Route::get('/rent/return', function(){
        return view('rents.return');
    })->name('rent.return');
    Route::resource('/rent', 'RentController');
});

// Route::get('tes', function(){
//     $query = \App\Book::with('category')->get();
//     return response()->json();
//     dd($query->category);
// });