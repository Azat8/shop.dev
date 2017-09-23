<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::created([

            'name' => 'Product Name',
            'description' => 'Description Text',
            'price' => 555,
            'image' => 'img/jpg',
            'visible' => 1,
            'category_id' => 1

        ]);
    }
}
