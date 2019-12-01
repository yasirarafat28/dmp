<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //

    protected $table = 'house';


    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }


}
