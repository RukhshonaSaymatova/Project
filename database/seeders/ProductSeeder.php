
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 500; $i++) {
            DB::table('products')->insert([
                'name' => 'Product ' . $i,
                'description' => 'Description for product ' . $i,
                'price' => rand(10, 1000),
                'stock' => rand(1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
};
