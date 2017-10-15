<?php
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {
    public function run()
    {
        factory(App\Models\Category::class, 20)->create();
    }
}