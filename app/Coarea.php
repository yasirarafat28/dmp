<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coarea extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }

    public function section()
    {
        return $this->belongsTo('App\AreaSection', 'section_id');
    }
}
