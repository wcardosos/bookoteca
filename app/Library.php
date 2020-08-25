<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
