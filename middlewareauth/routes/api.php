<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController;


/*Route::middleware('example')->get('/', [ExampleController::class,'index']);  //esta ruta está siendo protegida por el middleware example
Route::get('/no-access', [ExampleController::class,'noAccess'])->name('no-access'); // esta ruta no está siendo protegida
*/

//grupos de rutas
/*
Route::middleware(['example','auth','admin'])->group(function (){  // todas las rutas que queremos proteger solo tendríamos que añadirlas a este grupo
    Route::get('/', [ExampleController::class,'index']); 
    Route::get('/', [ExampleController::class,'index'])->withoutMiddleware('admin'); 
    Route::get('/', [ExampleController::class,'index']); 
    Route::get('/', [ExampleController::class,'index']); 
}); */


Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});