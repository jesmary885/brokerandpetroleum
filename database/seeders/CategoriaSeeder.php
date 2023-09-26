<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Categoria 1',


            ],
            [
                'name' => 'Categoria 2',
         
            ],
            [
                'name' => 'Categoria 3',
        
            ],
            [
                'name' => 'Categoria 4',
         
            ],
    

        ];

        foreach ($categories as $category) {
            $category = Categoria::create($category);

        }

    }
}
