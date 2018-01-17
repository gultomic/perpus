<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    protected $table = 'books';
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'name', 'isbn', 'ddc', 'bcode', 'category_id'
    // ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
