<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubJewelryTypeController extends Controller
{
    public function index(){
    	return SubJewelryType::all();
    }

    public function show(SubJewelryType $sub_jewelry_type){
    	return $sub_jewelry_type;
    }
}
