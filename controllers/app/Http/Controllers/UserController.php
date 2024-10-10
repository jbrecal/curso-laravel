<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;  // es para utilizar las consultas con sentencias de SQL


class UserController extends Controller
{
    public function index()  //esta funcion index es la destinada para controlar nuestra ruta
    {
        
        //$users = User::all();  // método estaico all nos va a traer todos los registros que solicitemos
        $users = User::where('age', '>', 30)->orderBy('age','asc')->get();
        return view('user.index', compact('users')); //compact va a contener el array con el dato y la variable $users
        //$users = DB::select(DB::raw("SELECT* FROM users"));
    }

    public function create()
    {
        //DB::insert( DB::raw('INSERT INTO user VALUES'))
        $user = new User;
        $user->name = "Juan";
        $user->email = "demo@demo.com";
        $user->password = Hash::make('123456'); // con este método podemos guardar un valor encriptado
        $user->age = 25;
        $user->address = "Calle demostracion 12";
        $user->zip_code = 290909;
        $user->save();

        User::create([
            "name" => "Brenes",
            "email"=> "info@demo.com",
            "password"=> Hash::make('123456'),
            "age" => 42,
            "address" => "Avenida de pruebas 17",
            "zip_code" => 280808
        ]);

        User::create([
            "name" => "Mariate",
            "email"=> "mariate@demo.com",
            "password"=> Hash::make('123456'),
            "age" => 32,
            "address" => "Avenida de pruebas 29",
            "zip_code" => 280808
        ]);

        return redirect()->route('user.index');

    }
    
}

