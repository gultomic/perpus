<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userlogin extends Model
{
    protected $guarded = [];
    protected $table = 'userlogins';
    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
