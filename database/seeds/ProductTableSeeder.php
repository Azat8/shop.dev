<?php
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder {
    public function run()
    {
        factory(App\Models\Product::class, 100)->create();
    }
}