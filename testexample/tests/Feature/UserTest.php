<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_set_database_config()
    {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_get_user_list(): void
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
        $response->assertJsonStructure([ //aqui comprobamos que la estructura de datos es correcta
            [
                'id',
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at'
            ]
        ]);
        $response->assertJsonFragment(['name' => 'Juan']);  //va a comprobar si existe un usuario llamado Juan
        $response->assertJsonCount(4); // En la base de datos habrá 4 usuario y comprobara que devuelve correctamente los usuarios

    }
    public function test_get_user_detail()
    {
        $response = $this->get('/api/users/1');
        $response->assertStatus(200);
        $response->assertJsonStructure([ //aqui comprobamos que la estructura de datos es correcta
            [
                'id',
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at'
            ]
        ]);
        $response->assertJsonFragment(['name' => 'Juan']);
    }
    public function test_get_none_existing_user_detail()
    {
        $response = $this->get('/api/users/559');
        $response->assertStatus(404);
    }
}
