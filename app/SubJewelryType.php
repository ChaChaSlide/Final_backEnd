<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubJewelryType extends Model
{
    public function jewelrytype(){
        return $this->belongsTo('App\JewelryType');
    }
    
    public function jewelrypiece(){
        return $this->hasMany('App\JewelryPiece');
    }
}
