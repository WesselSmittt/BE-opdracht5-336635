<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeverancierController extends Controller
{
    public function show($name)
    {
        $leverancier = DB::table('leverancier')
            ->where('Naam', $name)
            ->first();

        if ($leverancier === null) {
            return redirect()->back()->with('error', 'Leverancier not found');
        }

        $products = DB::table('productperleverancier')
            ->join('product', 'productperleverancier.product_id', '=', 'product.id')
            ->where('leverancier_id', $leverancier->id)
            ->select('product.Naam', 'productperleverancier.*')
            ->get();

        return view('leverancier.show', ['leverancier' => $leverancier, 'products' => $products]);
    }
}