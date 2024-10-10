<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;  // importar el modelo del seeder
use Illuminate\Support\Facades\DB; // importar este modelo

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'admin'
        ]);
        Role::create([
            'id' => 2,
            'name' => 'staff'
        ]);
        Role::create([
            'id' => 3,
            'name' => 'user'
        ]);
        Role::create([
            'id' => 4,
            'name' => 'guest'
        ]);

        DB::table('role_user')->insert([     //para usar este método se ha importado la clase  
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => 'juan'
        ]);
        DB::table('role_user')->insert([    
            'role_id' => 2,
            'user_id' => 1,
            'added_by' => 'mariate'
        ]);
        DB::table('role_user')->insert([    
            'role_id' => 1,
            'user_id' => 2,
            'added_by' => 'jose'
        ]);
        DB::table('role_user')->insert([    
            'role_id' => 3,
            'user_id' => 2,
            'added_by' =>'juanjo'
        ]);
        DB::table('role_user')->insert([    
            'role_id' => 4,
            'user_id' => 3,
            'added_by' => 'pedro'
        ]);


    }
}
