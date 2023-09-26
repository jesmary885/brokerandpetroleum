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
                'name' => 'Producto 1',
                'categoria_id' => 1,
                'other_features' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866-55',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'


            ],
            [
                'name' => 'Producto 2',
                'categoria_id' => 2,
                'other_features' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866-74',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
         
            ],
            [
                'name' => 'Producto 3',
                'categoria_id' => 3,
                'other_features' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
                'phone' => '555-8866-12',
                'country' => 'Contrary to',
                'city' => 'ciudad',
                'page_view' => 'si',
                'status' => 'Activo'
        
            ],
            [
                'name' => 'Producto 4',
                'categoria_id' => 4,
                'other_features' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.',
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
