<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', 'App\Http\Controllers\AuthController@login');

Route::middleware('auth')->group(function () {
    Route::get('dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');

    Route::get('produtos', 'App\Http\Controllers\ProdutoController@index')->name('produtos');
    Route::get('produtos_create', 'App\Http\Controllers\ProdutoController@create')->name('produtos_create');
    Route::post('produtos', 'App\Http\Controllers\ProdutoController@store')->name('produtos_store');
    Route::get('produtos/{id}', 'App\Http\Controllers\ProdutoController@show')->name('produtos_show');
    Route::put('produtos/{id}', 'App\Http\Controllers\ProdutoController@update')->name('produtos_update');
    Route::delete('produtos/{id}', 'App\Http\Controllers\ProdutoController@destroy')->name('produtos_destroy');

    Route::get('categorias', 'App\Http\Controllers\CategoriaController@index')->name('categorias');
    Route::get('categorias_create', 'App\Http\Controllers\CategoriaController@create')->name('categorias_create');
    Route::post('categorias', 'App\Http\Controllers\CategoriaController@store')->name('categorias_store');
    Route::get('categorias/{id}', 'App\Http\Controllers\CategoriaController@show')->name('categorias_show');
    Route::put('categorias/{id}', 'App\Http\Controllers\CategoriaController@update')->name('categorias_update');
    Route::delete('categorias/{id}', 'App\Http\Controllers\CategoriaController@destroy')->name('categorias_destroy');

    Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
});
