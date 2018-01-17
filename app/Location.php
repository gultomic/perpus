<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
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
}
