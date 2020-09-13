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
    public function area_details()
    {
        return $this->belongsTo('App\Area', 'area');
    }

    public function section_details()
    {
        return $this->belongsTo('App\AreaSection', 'section');
    }

    public function coarea()
    {
        return $this->belongsTo('App\Coarea', 'co_area');
    }
}
