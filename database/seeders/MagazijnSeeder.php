<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagazijnSeeder extends Seeder
{
    public function run()
    {
        DB::table('magazijn')->insert([
            ['id' => 1, 'product_id' => 1, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 453],
            ['id' => 2, 'product_id' => 2, 'VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 400],
            ['id' => 3, 'product_id' => 3, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 1],
            ['id' => 4, 'product_id' => 4, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 800],
            ['id' => 5, 'product_id' => 5, 'VerpakkingsEenheid' => 3, 'AantalAanwezig' => 234],
            ['id' => 6, 'product_id' => 6, 'VerpakkingsEenheid' => 2, 'AantalAanwezig' => 345],
            ['id' => 7, 'product_id' => 7, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 795],
            ['id' => 8, 'product_id' => 8, 'VerpakkingsEenheid' => 10, 'AantalAanwezig' => 233],
            ['id' => 9, 'product_id' => 9, 'VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 123],
            ['id' => 10, 'product_id' => 10, 'VerpakkingsEenheid' => 3, 'AantalAanwezig' => null],
            ['id' => 11, 'product_id' => 11, 'VerpakkingsEenheid' => 2, 'AantalAanwezig' => 367],
            ['id' => 12, 'product_id' => 12, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 467],
            ['id' => 13, 'product_id' => 13, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 20],
        ]);
    }
}
