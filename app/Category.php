<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function ebooks()
    {
        return $this->hasMany('App\Ebook');
    }
}
