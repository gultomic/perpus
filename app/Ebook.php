<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $guarded = [];
    protected $table = 'ebooks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'isbn', 'ddc'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
