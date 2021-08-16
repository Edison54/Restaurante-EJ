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

Route::get('/', function () {return view('auth.login');}) ->name('auth.login');



Route::get('/facturar', function () {return view('facturar.index');})->name('facturar.index');
Route::get('menu', 'App\Http\Controllers\ComidasController@index2')->name('menu.index');



Route::get('comidas', 'App\Http\Controllers\ComidasController@index')->name('comidas.index');
Route::get('comidas/crear', 'App\Http\Controllers\ComidasController@create')->name('comidas.create');
Route::post('comidas', 'App\Http\Controllers\ComidasController@store')->name('comidas.store');
Route::get('comidas/{comidas}', 'App\Http\Controllers\ComidasController@show')->name('comidas.show');
Route::get('comidas/{comidas}/editar', 'App\Http\Controllers\ComidasController@edit')->name('comidas.edit');
Route::patch('comidas/{comidas}', 'App\Http\Controllers\ComidasController@update')->name('comidas.update');
Route::delete('comidas/{comidas}', 'App\Http\Controllers\ComidasController@destroy')->name('comidas.destroy');



Route::get('clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes.index');
Route::get('clientes/crear', 'App\Http\Controllers\ClientesController@create')->name('clientes.create');
Route::post('clientes', 'App\Http\Controllers\ClientesController@store')->name('clientes.store');
Route::get('clientes/{clientes}', 'App\Http\Controllers\ClientesController@show')->name('clientes.show');
Route::get('clientes/{clientes}/editar', 'App\Http\Controllers\ClientesController@edit')->name('clientes.edit');
Route::patch('clientes/{clientes}', 'App\Http\Controllers\ClientesController@update')->name('clientes.update');
Route::delete('clientes/{clientes}', 'App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');



Route::get('usuarios', 'App\Http\Controllers\UsuariosController@index')->name('usuarios.index');
Route::get('usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@show')->name('usuarios.show');
Route::get('usuarios/{usuarios}/editar', 'App\Http\Controllers\UsuariosController@edit')->name('usuarios.edit');
Route::patch('usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@update')->name('usuarios.update');
Route::delete('usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@destroy')->name('usuarios.destroy');


Route::get('facturar', 'App\Http\Controllers\OrdenController@index')->name('facturar.index');
Route::get('facturar/crear', 'App\Http\Controllers\OrdenController@create')->name('facturar.create');
Route::post('facturar', 'App\Http\Controllers\OrdenController@store')->name('facturar.store');
Route::get('facturar/{orden}', 'App\Http\Controllers\OrdenController@show')->name('facturar.show');
Route::get('facturar/{orden}/editar', 'App\Http\Controllers\OrdenController@edit')->name('facturar.edit');
Route::patch('facturar/{orden}', 'App\Http\Controllers\OrdenController@update')->name('facturar.update');
;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
