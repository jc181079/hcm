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
Route::middleware(['auth'])->group(function(){

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
    Route::resource('citas','CitaController');
    
    Route::post('getMunicipios', 'jqueryController@getMunicipios')->name('getMunicipios');
    Route::post('getMedicoEspecialidad', 'jqueryController@getMedicoEspecialidad')->name('getMedicoEspecialidad');
    //Route::get('getMedicoEspecialidad?_token={_token}&estado_id={estado_id}&municipio_id={municipio_id}&especialidad_medico={especialidad_medico}&medico_id={medico_id}&ci_beneficiario={ci_beneficiario}&dolencia_descripcion={dolencia_descripcion}&fecha_cita={fecha_cita}&estatus_cita={estatus_cita}', 'jqueryController@getMedicoEspecialidad')->name('getMedicoEspecialidad');
    //http://localhost/hcm2/public/getMedicoEspecialidad?_token=iKSpnFs0nV3x04HbiQ0IqkmnNmNmjibComAMl1eH&estado_id=&municipio_id=N%2FA&especialidad_medico=2&medico_id=0&ci_beneficiario=&dolencia_descripcion=&fecha_cita=2021-06-20&clinica_municipio_id=&estatus_cita=Solicitada
    Route::resource('clinicamunicipio','ClinicasMunicipioController');
    //Route::get('/reactPeticionCombo?estado_id={estado_id}', 'MunicipioController@comboNivelOne')->name('rpc');
    Route::get('/home', 'HomeController@index')->name('home');
});


