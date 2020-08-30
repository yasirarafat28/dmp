<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaSection extends Model
{
    //


    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }
}
