<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    public function library()
    {
        return $this->belongsTo('App\Library');
    }

    public function genderBook()
    {
        return $this->belongsTo('App\GenderBook');
    }
}
