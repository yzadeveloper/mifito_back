<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            
            'category_name'=> 'Herbicida total'
        ]);

        Category::create([
            
            'category_name'=> 'Herbicida selectivo'
        ]);

        Category::create([
            
            'category_name'=> 'Insecticida'
        ]);

        Category::create([
            
            'category_name'=> 'Fungicida'
        ]);
    }
}
