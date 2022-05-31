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

Route::get('/', function () {
    return view('auth\login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::get('/produtos', 'App\Http\Controllers\ControladorProduto@index');

    Route::get('/receitas', 'App\Http\Controllers\ControladorReceita@index')->name('receitas');
    Route::get('/receitas/novo', 'App\Http\Controllers\ControladorReceita@create');
    Route::post('/receitas', 'App\Http\Controllers\ControladorReceita@store');
    Route::get('/receitas/apagar/{id}', 'App\Http\Controllers\ControladorReceita@destroy');
    Route::get('/receitas/editar/{id}', 'App\Http\Controllers\ControladorReceita@edit');
    Route::post('/receitas/{id}', 'App\Http\Controllers\ControladorReceita@update');
    
    Route::get('/despesas', 'App\Http\Controllers\ControladorDespesa@index')->name('despesas');
    Route::get('/despesas/novo', 'App\Http\Controllers\ControladorDespesa@create');
    Route::post('/despesas', 'App\Http\Controllers\ControladorDespesa@store');
    Route::get('/despesas/apagar/{id}', 'App\Http\Controllers\ControladorDespesa@destroy');
    Route::get('/despesas/editar/{id}', 'App\Http\Controllers\ControladorDespesa@edit');
    Route::post('/despesas/{id}', 'App\Http\Controllers\ControladorDespesa@update');
});