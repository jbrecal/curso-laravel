<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Maria',
            'email' => 'Maria@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Pedro',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Antonio',
            'email' => 'antonio@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
