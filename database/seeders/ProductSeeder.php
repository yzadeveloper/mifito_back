<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
        'name_product' => 'Tomcato',
        'id_category' => 1,
        'dose_ha' => 4000,
        'price_ml' => 0.02,
        'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
        'customer_comments' => 'Mata todo lo que toque',
        'application_instructions' => 'Aplicación puntual con mochila',
        'ecological' => 0
        ]);
    }
}
