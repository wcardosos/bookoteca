<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    public function library()
    {
        return $this->hasOne('App\Library');
    }
}
