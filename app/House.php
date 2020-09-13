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
    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }

    public function section()
    {
        return $this->belongsTo('App\AreaSection', 'section_id');
    }

    public function coarea()
    {
        return $this->belongsTo('App\Coarea', 'coarea_id');
    }
}
