<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class, 'index'])->name('user.index'); //get es un método de acceso por el cual vamos a realizar peticiones que no van encriptadas en su comunicaciones, son para datos no sensibles
Route::get('/create',[UserController::class, 'create'])->name('user.create');