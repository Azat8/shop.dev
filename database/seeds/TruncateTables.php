<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruncateTables extends Seeder {
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
    }
}