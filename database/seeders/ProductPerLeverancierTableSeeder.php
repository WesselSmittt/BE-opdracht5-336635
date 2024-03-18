<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerLeverancierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productperleverancier')->insert([
            ['id' => 1, 'leverancier_id' => 1, 'product_id' => 1, 'DatumLevering' => '2023-04-09', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => '2023-04-16'],
            ['id' => 2, 'leverancier_id' => 1, 'product_id' => 1, 'DatumLevering' => '2023-04-18', 'Aantal' => 21, 'DatumEerstVolgendeLevering' => '2023-04-25'],
            ['id' => 3, 'leverancier_id' => 1, 'product_id' => 2, 'DatumLevering' => '2023-04-09', 'Aantal' => 12, 'DatumEerstVolgendeLevering' => '2023-04-16'],
            ['id' => 4, 'leverancier_id' => 1, 'product_id' => 3, 'DatumLevering' => '2023-04-10', 'Aantal' => 11, 'DatumEerstVolgendeLevering' => '2023-04-17'],
            ['id' => 5, 'leverancier_id' => 2, 'product_id' => 4, 'DatumLevering' => '2023-04-14', 'Aantal' => 16, 'DatumEerstVolgendeLevering' => '2023-04-21'],
            ['id' => 6, 'leverancier_id' => 2, 'product_id' => 4, 'DatumLevering' => '2023-04-21', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => '2023-04-28'],
            ['id' => 7, 'leverancier_id' => 2, 'product_id' => 5, 'DatumLevering' => '2023-04-14', 'Aantal' => 45, 'DatumEerstVolgendeLevering' => '2023-04-21'],
            ['id' => 8, 'leverancier_id' => 2, 'product_id' => 6, 'DatumLevering' => '2023-04-14', 'Aantal' => 30, 'DatumEerstVolgendeLevering' => '2023-04-21'],
            ['id' => 9, 'leverancier_id' => 3, 'product_id' => 7, 'DatumLevering' => '2023-04-12', 'Aantal' => 12, 'DatumEerstVolgendeLevering' => '2023-04-19'],
            ['id' => 10, 'leverancier_id' => 3, 'product_id' => 7, 'DatumLevering' => '2023-04-19', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => '2023-04-26'],
            ['id' => 11, 'leverancier_id' => 3, 'product_id' => 8, 'DatumLevering' => '2023-04-10', 'Aantal' => 12, 'DatumEerstVolgendeLevering' => '2023-04-17'],
            ['id' => 12, 'leverancier_id' => 3, 'product_id' => 9, 'DatumLevering' => '2023-04-11', 'Aantal' => 1, 'DatumEerstVolgendeLevering' => '2023-04-18'],
            ['id' => 13, 'leverancier_id' => 4, 'product_id' => 10, 'DatumLevering' => '2023-04-16', 'Aantal' => 24, 'DatumEerstVolgendeLevering' => '2023-04-30'],
            ['id' => 14, 'leverancier_id' => 5, 'product_id' => 11, 'DatumLevering' => '2023-04-10', 'Aantal' => 47, 'DatumEerstVolgendeLevering' => '2023-04-17'],
            ['id' => 15, 'leverancier_id' => 5, 'product_id' => 11, 'DatumLevering' => '2023-04-19', 'Aantal' => 60, 'DatumEerstVolgendeLevering' => '2023-04-26'],
            ['id' => 16, 'leverancier_id' => 5, 'product_id' => 12, 'DatumLevering' => '2023-04-11', 'Aantal' => 45, 'DatumEerstVolgendeLevering' => NULL],
            ['id' => 17, 'leverancier_id' => 5, 'product_id' => 13, 'DatumLevering' => '2023-04-12', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => NULL],
        ]);
    }
}