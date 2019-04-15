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


    Route::get('pages', [
        'uses' => 'PagesController@index',
        'as' => 'pages.index'
    ]);

    Route::get('pages/create', [
        'uses' => 'PagesController@create',
        'as' => 'pages.create'
    ]);

    Route::post('pages/store', [
        'uses' => 'PagesController@store',
        'as' => 'pages.store'
    ]);

    Route::get('pages/edit/{page}', [
        'uses' => 'PagesController@edit',
        'as'=> 'pages.edit'
    ]);

    Route::put('pages/{page}', [
        'uses' => 'PagesController@update',
        'as'=> 'pages.update'
    ]);

    Route::delete('pages/{page}', [
        'uses' => 'PagesController@destroy',
        'as' => 'pages.delete'
    ]);

//--------------------------------------------

    Route::get('registration', [
        'uses' => 'RegistrationController@index',
        'as' => 'registration.index'
    ]);

    Route::get('registration/create', [
        'uses' => 'RegistrationController@create',
        'as' => 'registration.create'
    ]);

    Route::post('registration/store', [
        'uses' => 'RegistrationController@store',
        'as' => 'registration.store'
    ]);

    Route::get('registration/edit/{patient}', [
        'uses' => 'RegistrationController@edit',
        'as'=> 'registration.edit'
    ]);

    Route::put('patients/{patient}', [
        'uses' => 'RegistrationController@update',
        'as'=> 'registration.update'
    ]);

    Route::delete('patients/{patient}', [
        'uses' => 'RegistrationController@destroy',
        'as' => 'registration.delete'
    ]);


    Route::get('workers', [
        'uses' => 'WorkersController@index',
        'as' => 'workers.index'
    ]);

    Route::get('workers/create', [
    'uses' => 'WorkersController@create',
    'as' => 'workers.create'
    ]);

    Route::post('workers/store', [
    'uses' => 'WorkersController@store',
    'as' => 'workers.store'
    ]);

    Route::get('workers/edit/{worker}', [
    'uses' => 'WorkersController@edit',
    'as'=> 'workers.edit'
    ]);

    Route::put('workers/{worker}', [
    'uses' => 'WorkersController@update',
    'as'=> 'workers.update'
    ]);

    Route::delete('workers/{worker}', [
    'uses' => 'WorkersController@destroy',
    'as' => 'workers.delete'
    ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
