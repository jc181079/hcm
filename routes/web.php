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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('carga_familiar','CargaFamiliarController');
Route::resource('usuarios','UsuarioController');
Route::resource('reglas','RoleController');
Route::resource('estados','EstadoController');
Route::resource('municipios','MunicipioController');
Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
