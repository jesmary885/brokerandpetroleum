<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'name_es' => 'Merey16',
                'name_en' => 'Merey16 ',
                'categoria_id' => 1,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866-55',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'


            ],
            [
                'name_es' => 'Full oil',
                'name_en' => 'Full oil',
                'categoria_id' => 2,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866-74',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
         
            ],
            [
                'name_es' => 'Jeta1',
                'name_en' => 'Jeta1',
                'categoria_id' => 3,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866-12',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
        
            ],
            [
                'name_es' => 'En590',
                'name_en' => 'En590',
                'categoria_id' => 4,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
         
            ],

            [
                'name_es' => 'Gasolina',
                'name_en' => 'Gasolina',
                'categoria_id' => 4,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
            ],

            [
                'name_es' => 'D6',
                'name_en' => 'D6',
                'categoria_id' => 4,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
         
            ],

            [
                'name_es' => 'Jp54',
                'name_en' => 'Jp54',
                'categoria_id' => 4,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
         
            ],

            [
                'name_es' => 'D2',
                'name_en' => 'D2',
                'categoria_id' => 4,
                'other_features_es' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'other_features_en' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
         
            ],
        ];

        foreach ($productos as $producto){
            $producto = Producto::create($producto);

            Images::create([
                'imageable_id' => $producto->id,
                'imageable_type' => Producto::class,
                'url' => 'productos/imagen'.$producto->id.'.jpg',
            ]);
        }
    }
}
