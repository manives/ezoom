<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Rotas protegidas por autenticação JWT
/*Route::middleware('auth:api')->group(function () {
    // Rotas de visualização para categorias
    Route::get('categorias', 'CategoriaController@indexView')->name('categorias');
    Route::get('categorias/{id}', 'CategoriaController@showView')->name('categorias.show');

    // Rotas de visualização para produtos
    Route::get('produtos',  [ProdutoController::class, 'indexView'])->name('produtos');
    Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::post('produtos', [ProdutoController::class, 'show'])->name('produtos.show');

    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
});*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
