<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Magazijn;
use App\Models\ProductPerLeverancier;
use App\Models\Leverancier;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('magazijn')
            ->join('product', 'magazijn.Product_id', '=', 'product.id')
            ->join('productperleverancier', 'product.id', '=', 'productperleverancier.product_id')
            ->join('leverancier', 'productperleverancier.leverancier_id', '=', 'leverancier.id')
            ->select('product.Barcode', 'product.Naam', 'magazijn.VerpakkingsEenheid', 'magazijn.AantalAanwezig', 'leverancier.Naam as LeverancierNaam')
            ->get();



        return view('dashboard', ['products' => $products]);
    }
}