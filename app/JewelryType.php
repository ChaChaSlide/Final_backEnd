<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JewelryType extends Model
{
    public function subjewelrytypes(){
        return $this->hasMany('App\SubJewelryType');
    }
    
    public function jewelrypieces(){
        return $this->hasMany('App\JewelryPiece');
    }
}
