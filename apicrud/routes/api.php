<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('/note', NoteController::class);