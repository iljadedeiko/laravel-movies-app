<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');

Route::get('/actors', [App\Http\Controllers\ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [App\Http\Controllers\ActorsController::class, 'index']);

Route::get('/actors/{actor}', [App\Http\Controllers\ActorsController::class, 'show'])->name('actors.show');


