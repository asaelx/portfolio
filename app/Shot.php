<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model
{
    protected $table = 'shots';

    public function programs(){
        return $this->belongsToMany('App\Program', 'shots_programs');
    }
}
