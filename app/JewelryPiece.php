<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JewelryPiece extends Model
{
    public function jewelrytype(){
        return $this->belongsTo('App\JewelryType');
    }
    
    public function subjewelrytype(){
        return $this->belongsTo('App\SubJewelryType');
    }
}
