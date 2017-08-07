<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubJewelryType;

class SubJewelryTypeController extends Controller
{
    public function index(){
    	return SubJewelryType::all();
    }

    public function show(SubJewelryType $subjewelry_type){
    	return $subjewelry_type;
    }
}
