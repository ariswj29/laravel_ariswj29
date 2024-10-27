<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'username' => 'ariswj',
            'email' => 'ariswj29@gmail',
            'email_verified_at' => now(),
            'password' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        User::create([
            'username' => 'inibudi',
            'email' => 'budi123@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
