<?php

namespace Database\Seeders;

use App\Models\Fase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fases = [
            [
                'nro' => '1',
                'name' => 'Fase 1'

            ],
            [
                'nro' => '2',
                'name' => 'Fase 2'
            ],
            [
                'nro' => '3',
                'name' => 'Fase 3',
            ],
            [
                'nro' => '4',
                'name' => 'Fase 4'
            ],
        ];

        foreach ($fases as $fase) {
            Fase::create($fase);
        }
    }
}
