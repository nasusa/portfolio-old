<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Mini skirt black', 
            'title' => 'Mini skirt black', 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'price' => 35,
            'category_id' => 1,
            'brand_id' => 1
            ]);
        
         DB::table('products')->insert([
            'name' => 'Tshirt blue', 
            'title' => 'tshirt blue', 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'price' => 15,
            'category_id' => 2,
            'brand_id' => 3
            ]);

        DB::table('products')->insert([
            'name' => 'Mingi Pusa', 
            'title' => 'Lahe pusa', 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'price' => 35,
            'category_id' => 3,
            'brand_id' => 2
            ]);
    }
}
