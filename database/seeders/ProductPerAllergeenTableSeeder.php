<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerAllergeenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productperallergeen')->insert([
            ['id' => 1, 'product_id' => 1, 'allergeen_id' => 2],
            ['id' => 2, 'product_id' => 1, 'allergeen_id' => 1],
            ['id' => 3, 'product_id' => 1, 'allergeen_id' => 3],
            ['id' => 4, 'product_id' => 3, 'allergeen_id' => 4],
            ['id' => 5, 'product_id' => 6, 'allergeen_id' => 5],
            ['id' => 6, 'product_id' => 9, 'allergeen_id' => 2],
            ['id' => 7, 'product_id' => 9, 'allergeen_id' => 5],
            ['id' => 8, 'product_id' => 10, 'allergeen_id' => 2],
            ['id' => 9, 'product_id' => 12, 'allergeen_id' => 4],
            ['id' => 10, 'product_id' => 13, 'allergeen_id' => 1],
            ['id' => 11, 'product_id' => 13, 'allergeen_id' => 4],
            ['id' => 12, 'product_id' => 13, 'allergeen_id' => 5],
        ]);
    }
}   