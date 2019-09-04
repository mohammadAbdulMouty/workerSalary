<?php

namespace App;
use App\PriceOfHour;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function pricehour(){
        return $this->hasMany('App\PriceOfHour');
    }
}
