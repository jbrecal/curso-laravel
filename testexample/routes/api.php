<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/users', [UserController::class, 'index']);
Route::get('/', function() {return "Hello world";});
Route::get('/users/{id}', [UserController::class, 'details']);