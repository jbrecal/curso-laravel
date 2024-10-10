<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/note',[NoteController::class, 'index'])->name('note.index');

//ahora empezamos con la creación

Route::get('/note/create',[NoteController::class, 'create'])->name('note.create');

//la siguiente ruta va a estar recepcionando la información del formulario

Route::post('note/store',[NoteController::class,'store'])->name('note.store');

//edicion

Route::get('/note/edit/{note}',[NoteController::class,'edit'])->name('note.edit');

//actualización

Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('note/show/{note}', [NoteController::class, 'show'])->name('note.show');

//rutas para el borrado de nuestro contenido

Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

//php artisan make:controller PostController --resource y creara ya todas las funciones
Route::resource('/post', PostControlle::class);