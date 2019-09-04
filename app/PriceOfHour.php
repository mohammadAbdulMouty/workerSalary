<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceOfHour extends Model
{
    public function worker(){
        return $this->belongsTo('App\Worker','workerId');
    }
}
