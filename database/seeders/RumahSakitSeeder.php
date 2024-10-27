<?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        RumahSakit::create([
            'nama' => 'RS Rajawali',
            'alamat' => 'Jl. Margahayu No. 1',
            'email' => 'info@rajawali.com',
            'telepon' => '089123456789',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        RumahSakit::create(
        [
            'nama' => 'RS Advent',
            'alamat' => 'Jl. Lembang No. 2',
            'email' => 'info@advent.com',
            'telepon' => '089123456788',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        RumahSakit::create(
        [
            'nama' => 'RS Sentosa',
            'alamat' => 'Jl. Cimahi No. 3',
            'email' => 'info@sentosa.com',
            'telepon' => '089123456787',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}