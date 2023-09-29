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
            'dose_ha' => 4,
            'price_ml' => 0.02,
            'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
            'customer_comments' => 'Mata todo lo que toque',
            'application_instructions' => 'Aplicación puntual con mochila',
            'ecological' => 0
            ]);

            Product::create([
                'name_product' => 'Clinic',
                'id_category' => 1,
                'dose_ha' => 4,
                'price_ml' => 0.02,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                'ecological' => 0
                ]);

            Product::create([
                'name_product' => 'Roundup',
                'id_category' => 1,
                'dose_ha' => 4,
                'price_ml' => 0.02,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                'ecological' => 0
                ]);

            Product::create([
                'name_product' => 'Tidex',
                'id_category' => 2,
                'dose_ha' => 2,
                'price_ml' => 0.04,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                'ecological' => 0
                ]);

             Product::create([
                'name_product' => 'Sencor',
                'id_category' => 2,
                'dose_ha' => 1,
                'price_ml' => 0.04,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                 'ecological' => 0
                 ]);

             Product::create([
                'name_product' => 'Decis Evo',
                'id_category' => 3,
                'dose_ha' => 1,
                'price_ml' => 0.04,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                'ecological' => 0
                 ]);

             Product::create([
                'name_product' => 'Decis Evo',
                'id_category' => 3,
                'dose_ha' => 0.250,
                'price_ml' => 0.04,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                'ecological' => 0
                 ]);

             Product::create([
                'name_product' => 'Sumifive',
                'id_category' => 3,
                'dose_ha' => 0.250,
                'price_ml' => 0.04,
                'technical_comments' => 'Mezclar con aceite insecticida para mayor efectividad',
                'customer_comments' => 'Mata todo lo que toque',
                'application_instructions' => 'Aplicación puntual con mochila',
                'ecological' => 0
                 ]);
    


    }
}
