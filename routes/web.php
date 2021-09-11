<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CharacterController::class, 'index'])->name('characters.index');
Route::get('/characters', [CharacterController::class, 'show']);


// Route::get('/', function () {
//     return view('characters');
// });
