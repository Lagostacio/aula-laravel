<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('produtos')->insert([
            [
                'name' => 'Camiseta',
                'price' => 59.9,
                'quantity' => 20,
            ],
            [
                'name' => 'Boné',
                'price' => 25.9,
                'quantity' => 27,
            ],
            [
                'name' => 'Banana',
                'price' => 2.99,
                'quantity' => 69,
            ],
        ]);
    }
}
