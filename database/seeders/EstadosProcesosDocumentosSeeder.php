<?php

namespace Database\Seeders;

use App\Models\EstadosProcesosDocumentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosProcesosDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            [
                'name' => 'Recibido y verificado',
                'color' => 'verde'
            ],

            [
                'name' => 'Recibido (No confiable)',
                'color' => 'rojo'
         
            ],
            [
                'name' => 'No recibido',
                'color' => 'amarillo'
        
            ],
            [
                'name' => 'N/A',
                'color' => 'verde'
         
            ],

        ];

        foreach ($estados as $estado) {

            EstadosProcesosDocumentos::create($estado);

        }
    }
}
