<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\Uppercase;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('index', compact('users'));  //muestra la vista
        //return User::paginate(15);  //mediante backend puro
    }

    public function search()
        {
            return view ('search');
        }
    public function searchPost(SearchRequest $request)
    {
      
        $users = User::where('name', $request->name, '%like')->get();
        return view('search-results', compact('users'));
    }
}

