<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JewelryType;

class JewelryTypeController extends Controller
{
    public function index(){
    	return JewelryType::all();
    }

    public function show(JewelryType $jewelry_type){
    	return $jewelry_type;
    }
}
