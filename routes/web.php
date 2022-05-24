<?php

use App\Http\Controllers\ProfesorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('profesor/tema', [ProfesorController::class,'tema1'])
->name('profesor.tema');

Route::get('profesor/tema2', function (){
    return view('profesor.tema2');
});

Route::get('profesor/tema', [ProfesorController::class,'tema1'])
->name('profesor.tema');

Route::get('profesor/banco', [ProfesorController::class,'banco'])
->name('profesor.banco');


Route::resource('tema','App\Http\Controllers\Examen1');
Route::resource('ciencias','App\Http\Controllers\Examen2');
Route::resource('matematicas','App\Http\Controllers\Examen3');

Route::resource('examen_literatura','App\Http\Controllers\Ex1');
Route::resource('examen_ciencias','App\Http\Controllers\Ex2');
Route::resource('examen_matematicas','App\Http\Controllers\Ex3');
Route::resource('resumen','App\Http\Controllers\Evalua');

