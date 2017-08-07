<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// jewelry type end points
Route::get('/jewelry_types', 'JewelryTypeController@index');
Route::get('/jewelry_types/{jewelry_type}', 'JewelryTypeController@show');
// sub_jewelry_type end points
Route::get('/sub_jewelry_types', 'SubJewelryTypeController@index');
Route::get('/sub_jewelry_types/{sub_jewelry_type}', 'SubJewelryTypeController@show');
// jewelry pieces
Route::get('/jewelry_piece', 'JewelryPieceController@index');
Route::get('/jewelry_piece/{jewelry_piece}', 'JewelryPieceController@show');
Route::post('/jewelry_piece', 'JewelryPieceControllerController@store');
Route::put('/jewelry_piece/{jewelry_piece}', 'JewelryPieceController@update');
Route::delete('/jewelry_piece/{jewelry_piece}', 'JewelryPieceController@delete');