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
    ->select('product.Barcode', 'product.Naam', 'magazijn.VerpakkingsEenheid', 'magazijn.AantalAanwezig', 'magazijn.LeveringInfo', 'leverancier.Naam as LeverancierNaam')
    ->orderBy('product.Barcode', 'asc') 
    ->get();


        foreach ($products as $product) {
            if ($product->AantalAanwezig == 0) {
                $product->LeveringInfo = "Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023";
            } else {
                $product->LeveringInfo = "Er is voldoende voorraad van dit product.";
            }
        }

        return view('dashboard', ['products' => $products]);
    }
}

