<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //bikin produk dengan random kategory id dari 1-5
        for ($i = 1; $i <= 10; $i++) {
            Produk::create([
                'nama' => 'Produk ' . $i,
                'deskripsi' => 'Deskripsi Produk ' . $i,
                'kategori_id' => $i,
            ]);
        }
    }
}
