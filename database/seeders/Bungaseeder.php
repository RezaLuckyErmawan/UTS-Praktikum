<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bunga;

class Bungaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bunga::create([
            'nama' => 'Mawar',
            'Jenis' => 'Lokal',
            'harga' => '20.000',
        ]);   
    }
}
