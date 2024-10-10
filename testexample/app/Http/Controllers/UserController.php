<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);

    }
    public function details($id)
    {
        $user = User::find($id);
        if($user === null)
        {
            abort(404);
        }
        return response()->json($user);
    }
}
