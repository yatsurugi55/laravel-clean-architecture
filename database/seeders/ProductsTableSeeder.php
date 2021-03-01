<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$products = ['productA', 'productB', 'productC'];
        $products = [
            ['A_Chair', 'Chair', 'Thailand', 4],
            ['B_Bed', 'Bed', 'Italy', 2],
            ['C_Table', 'Table', 'France', 1],
            ['D_Chair', 'Chair', 'Japan', 3],
        ];

        foreach ($products as $product) {
            echo($product[0]);
            echo($product[1]);
            echo($product[2]);
            echo($product[3]);

            DB::table('products')->insert([
                'name' => $product[0],
                'type' => $product[1],
                'made_in' => $product[2],
                'stock' => $product[3],
            ]);
        }
    }
}
