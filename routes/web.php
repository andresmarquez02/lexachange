<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// DB::listen(function($query){
//     echo $query->sql;
// });
Route::middleware(['guest'])->group(function () {
    Route::view('/', 'welcome');
    Route::post('reset', "Auth\ResetPasswordController@reset");
    Route::get('confirma_cuenta/{id}', 'Auth\VerificationController@index');
    Route::post('send_consulta', 'HomeController@send');
});

Route::get('documentacion', 'developerController@documentacion');
// Route::get('sobre', 'developerController@sobre');
Auth::routes();

Route::middleware(['auth', 'verify'])->group(function () {
    Route::redirect('/home', 'inicio')->name('home');
    Route::get('/inicio', 'HomeController@index')->name('inicio');
    /**Comprar Lexas */
    Route::post('pagar', "pagosController@pagar");
    Route::get('paypal/status', 'pagosController@status');
    /*Perfil de usuario */
    Route::get('/perfil', 'HomeController@perfil')->name('perfil');
    Route::post('/usuario', 'HomeController@usuario');
    Route::post('/perfil', 'HomeController@perfil_save');
    Route::get('/solicitud/cod', 'HomeController@solicitud_cod');
    /*Transferencias */
    Route::get('transferir', 'transferenciasController@create');
    Route::post('tipos', 'transferenciasController@tipos');
    Route::post('transferir', 'transferenciasController@store');
    Route::get('transferencias', 'transferenciasController@index');
    Route::post('mis/transferencias','transferenciasController@mis_trasferencias');
    Route::get('retirar', 'HomeController@retirar');
    /*Mi balance */
    Route::get('mi_balance', 'valanceController@index');
    /* *Mis aplicaiones */
    Route::get('mis_apps', 'developerController@apps');
    Route::post('mis/apps', 'developerController@mis_apps');
    Route::post('crear/app', 'developerController@app_save');
    Route::put('editar/app/{id}', 'developerController@update');
    Route::get('ver app/{id}', 'developerController@ver_app');
    Route::post('eliminar/app/{id}', 'developerController@destroy');
    /**Documentacion */
    Route::get('estadisticas', 'estadisticasController@index');
    Route::get('salir', "HomeController@salir");
});

// Route::get('modal', function ($id =22) {
//     return view("modal");
// });

