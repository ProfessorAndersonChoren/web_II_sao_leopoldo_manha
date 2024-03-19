<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/create', [BookController::class, 'store'])->name('book.create');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/book/edit/{id}', [BookController::class,'update'])->name('book.update');
Route::get('/book/delete/{id}',[BookController::class,'destroy'])->name('book.delete');
