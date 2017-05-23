<?php

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

Route::get('/Vendas/create','VendasController@create')->name('adicionar_venda');

Route::post('/Vendas/store','VendasController@store')->name('salva_venda');

Route::get('/Vendedor/create','VendedorController@create')->name('adicionar_vendedor');

Route::post('/Vendedor/store','VendedorController@store')->name('salva_vendedor');
