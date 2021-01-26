<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/visualizar/{id}', function ($id) {
    return 'Aquí se visualiza la nota' . ' ' .$id;
})->where('id', '\d+');

Route::get('/crear', function () {
    return 'Aquí se crean todas las notas';
});


Route::get('/listar', function () {
    return 'Aquí se listarían las notas';
});

Route::get('/editar', function () {
    return 'Aquí se editan las notas';
});
    