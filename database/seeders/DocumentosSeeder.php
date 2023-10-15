<?php

namespace Database\Seeders;

use App\Models\Documentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentos = [
            [
                'fase_id' => '1',
                'name' => 'Documento X1',


            ],
            [
                'fase_id' => '1',
                'name' => 'Documento X2',
         
            ],
            [
                'fase_id' => '2',
                'name' => 'Documento X3',
        
            ],
            [
                'fase_id' => '2',
                'name' => 'Documento X4',
         
            ],

            [
                'fase_id' => '3',
                'name' => 'Documento X5',
         
            ],

            [
                'fase_id' => '4',
                'name' => 'Documento X6',
         
            ],

            [
                'fase_id' => '4',
                'name' => 'Documento X7',
         
            ],

            
    

        ];

        foreach ($documentos as $documento) {

            Documentos::create($documento);

        }
    }
}
