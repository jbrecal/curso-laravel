<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;   // importar el modelo del seeder

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => 34,
            'phone_number' => 66666,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 33,
            'phone_number' => 77777,
            'user_id' => 1
        ]);
    }
}
