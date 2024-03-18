<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergeenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allergeen')->insert([
            ['id' => 1, 'Naam' => 'Gluten', 'Omschrijving' => 'Dit product bevat gluten'],
            ['id' => 2, 'Naam' => 'Gelatine', 'Omschrijving' => 'Dit product bevat gelatine'],
            ['id' => 3, 'Naam' => 'AZO-Kleurstof', 'Omschrijving' => 'Dit product bevat AZO-kleurstoffen'],
            ['id' => 4, 'Naam' => 'Lactose', 'Omschrijving' => 'Dit product bevat lactose'],
            ['id' => 5, 'Naam' => 'Soja', 'Omschrijving' => 'Dit product bevat soja'],
        ]);
    }
}