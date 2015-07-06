<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    public function shots(){
        return $this->belongsToMany('App\Shot', 'shots_programs');
    }
}
