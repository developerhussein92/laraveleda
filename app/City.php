<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class City extends Model
{
    //
    use softDeletes;

    public function customer()
    {
        return $this->hasMany('App\Customer');
    }
}
