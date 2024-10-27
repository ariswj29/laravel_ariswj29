<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Pasien::create([
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Sarinah No. 1',
            'no_telepon' => '08987654321',
            'rumah_sakit_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pasien::create([
            'nama' => 'Ani Putri',
            'alamat' => 'Jl. Tamansari No. 2',
            'no_telepon' => '08987654322',
            'rumah_sakit_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pasien::create([
            'nama' => 'Joko Susilo',
            'alamat' => 'Jl. Tebet No. 33',
            'no_telepon' => '08987654323',
            'rumah_sakit_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pasien::create([
            'nama' => 'Rina Amanda',
            'alamat' => 'Jl. Kayuambon No.21',
            'no_telepon' => '08987654324',
            'rumah_sakit_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Pasien::create([
            'nama' => 'Agus Salim',
            'alamat' => 'Jl. Kayuambon No.21',
            'no_telepon' => '08987654324',
            'rumah_sakit_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}