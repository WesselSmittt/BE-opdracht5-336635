<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function show($name)
    {
        $allergeen = DB::table('allergeen')
            ->where('Naam', $name)
            ->first();

        $product = DB::table('product')
            ->join('productperallergeen', 'product.id', '=', 'productperallergeen.product_id')
            ->join('allergeen', 'productperallergeen.allergeen_id', '=', 'allergeen.id')
            ->where('product.Naam', $name)
            ->select('product.*', 'allergeen.Naam as allergeen_naam', 'allergeen.Omschrijving as allergeen_omschrijving')
            ->get();

        return view('allergeen.show', ['product' => $product, 'allergeen' => $allergeen]);
    }
}