<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    //
    protected $table = 'familymembers';
    protected $fillable = ['name', 'nid', 'relation', 'age', 'birth_code'];
}
