<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'users']);
Route::post('/store', [UserController::class,'store']);
Route::get('delete/{id}', [UserController::class,'delete']);
Route::get('edit/{id}', [UserController::class, 'edit']);
Route::post('update/{id}', [UserController::class, 'update']);

