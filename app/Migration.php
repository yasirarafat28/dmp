<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    //

    protected $table = 'house_migration';


    public function house()
    {
        return $this->belongsTo('App\House', 'house_id');
    }

    public function resident()
    {
        return $this->belongsTo('App\User', 'resident_id');
    }

    public  function members()
    {
        return $this->hasMany('App\family', 'user_id');
    }
}
