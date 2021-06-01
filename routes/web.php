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
Route::resource('clinicas','ClinicaController');
Route::resource('medicos','MedicoController');
Route::resource('examenlab','ExamenesLaboratorioController');
Route::resource('examencli','ExamenesClinicaController');
Route::resource('especialidadesmed','EspecialidadMedicoController');
Auth::routes();
Route::post('getMunicipios', 'jqueryController@getMunicipios')->name('getMunicipios');
Route::resource('clinicamunicipio','ClinicasMunicipioController');
//Route::get('/reactPeticionCombo?estado_id={estado_id}', 'MunicipioController@comboNivelOne')->name('rpc');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
