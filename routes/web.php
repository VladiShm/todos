<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;


Route::get('/', [todosController::class, 'index']) -> name('todo.home');


Route::get('/create', function () {
    return view('layouts.create');
}) -> name("todo.create");

Route::get('/delete/{id}', [todosController::class, 'delete']) ->name("todo.delete");

Route::get('/edit/{id}', [todosController::class, 'edit']) ->name("todo.edit");

Route::post('/update', [todosController::class, 'updateData']) ->name("todo.updateData");

//add todo
Route::get('/create', [todosController::class, 'showCategory'])->name('todo.create');
Route::post('/create', [todosController::class, 'store'])->name("todo.store");

//category routs
Route::get('/addCategory', function () {
    return view('layouts.addCategory');
}) -> name("category.add");

//route add category
Route::post('/createCategory', [todosController::class, 'cat']) ->name("category.cat");

Route::get('/deleteCategory/{id}', [todosController::class, 'deleteCategory']) ->name("category.delete");

Route::get('/editCateogry/{id}', [todosController::class, 'editCategory']) ->name("category.edit");

Route::post('/updateCategory', [todosController::class, 'updateCategory']) ->name("category.update");