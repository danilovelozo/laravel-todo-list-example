<?php

use Illuminate\Support\Facades\Route;

//homepage todo route
Route::get('/',[App\Http\Controllers\todosController::class, 'index'])->name("todo.home");

//create todo route
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//edit todo route
Route::get('/edit/{id}',[App\Http\Controllers\todosController::class,'edit'])->name("todo.edit");

//update todo route
Route::post('/update', [App\Http\Controllers\todosController::class,'updateData'])->name("todo.updateData");

//store todo route
Route::post('/create', [App\Http\Controllers\todosController::class,'store'])->name("todo.store");

//delete toto route
Route::get('/delete/{id}', [App\Http\Controllers\todosController::class,'delete'])->name("todo.delete");
