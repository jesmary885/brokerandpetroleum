<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('/productos');
        Storage::makeDirectory('/productos');

        $this->call(RoleSeeder::class);

        $this->call(CountrySeeder::class);

        $this->call(ProvinciaSeeder::class);

        $this->call(CategoriaSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
