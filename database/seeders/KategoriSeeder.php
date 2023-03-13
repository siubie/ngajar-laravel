<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Kategori::factory()->count(10)->create();

        //create 10 kategori without factory
        for ($i = 0; $i < 10; $i++) {
            Kategori::create([
                'nama' => 'Kategori ' . $i,
            ]);
        }
    }
}
