<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');

Route::get('admin/home', 'HomeController@index');
//Route::get('/testeTemplate', 'HomeController@testeLayout');

//PACIENTE ROUTES
Route::get('admin/cadastro-paciente', 'HomeController@cadastroPaciente');
Route::post('admin/insere-paciente', 'AdminController@inserePaciente');
Route::get('admin/ficha-anamnese', 'HomeController@fichaAnamnese');