<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            ['id' => 1, 'Naam' => 'Mintnopjes', 'Barcode' => '8719587231278'],
            ['id' => 2, 'Naam' => 'Schoolkrijt', 'Barcode' => '8719587326713'],
            ['id' => 3, 'Naam' => 'Honingdrop', 'Barcode' => '8719587327836'],
            ['id' => 4, 'Naam' => 'Zure Beren', 'Barcode' => '8719587321441'],
            ['id' => 5, 'Naam' => 'Cola Flesjes', 'Barcode' => '8719587321237'],
            ['id' => 6, 'Naam' => 'Turtles', 'Barcode' => '8719587322245'],
            ['id' => 7, 'Naam' => 'Witte Muizen', 'Barcode' => '8719587328256'],
            ['id' => 8, 'Naam' => 'Reuzen Slangen', 'Barcode' => '8719587325641'],
            ['id' => 9, 'Naam' => 'Zoute Rijen', 'Barcode' => '8719587322739'],
            ['id' => 10, 'Naam' => 'Winegums', 'Barcode' => '8719587327527'],
            ['id' => 11, 'Naam' => 'Drop Munten', 'Barcode' => '8719587322345'],
            ['id' => 12, 'Naam' => 'Kruis Drop', 'Barcode' => '8719587322265'],
            ['id' => 13, 'Naam' => 'Zoute Ruitjes', 'Barcode' => '8719587323256'],
        ]);
    }
}