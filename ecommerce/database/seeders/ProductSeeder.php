<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



// 
use App\Models\Product;

class ProductSeeder extends Seeder
{
//     // /**
//     //  * Run the database seeds.
//     //  */
//     // public function run(): void
//     // {
//     //     //
//     // }

//     public function run()
// {
//     Product::factory()->count(50)->create();
// }

// 
/**
     * Esegui i seeder del database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(50)->create();
    }

}
