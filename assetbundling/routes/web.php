<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', [PdfController::class, 'index'])->name('welcome');
Route::get('/download', [PdfController::class, 'download'])->name('download');
