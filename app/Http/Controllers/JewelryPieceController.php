<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JewelryPiece;

class JewelryPieceController extends Controller
{
     public function index()
    {
        return JewelryPiece::all();
    }
 
    public function show(JewelryPiece $jewelry_piece)
    {
        return $jewelry_piece;
    }

    public function store(Request $request)
    {
        $jewelry_piece = JewelryPiece::create($request->all());
        return response()->json($jewelry_piece, 201);
    }

    public function update(Request $request, $id)
    {
        $jewelry_piece = JewelryPiece::findOrFail($id);
        $jewelry_piece->update($request->all());

        return $jewelry_piece;
    }
}
