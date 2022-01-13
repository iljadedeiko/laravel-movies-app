<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');

Route::get('/tv', [App\Http\Controllers\TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{id}', [App\Http\Controllers\TvController::class, 'show'])->name('tv.show');

Route::get('/actors', [App\Http\Controllers\ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [App\Http\Controllers\ActorsController::class, 'index']);

Route::get('/actors/{id}', [App\Http\Controllers\ActorsController::class, 'show'])->name('actors.show');


