<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderBook extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
