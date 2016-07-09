<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BlogPostsTableSeeder::class);
         $this->call(BlogPostsTagsTableSeeder::class);
         $this->call(BrandsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
    }
}
