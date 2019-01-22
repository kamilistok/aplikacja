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

Route::group([
    'middleware' =>'roles',
    'roles' => ['Admin']
], function() {
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

});
Route::group([
    'middleware' =>'roles',
    'roles' => ['Admin']
], function() {

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
});
Route::group([
    'middleware' =>'roles',
    'roles' => ['Admin']
], function() {
    Route::get('doctors', [
        'uses' => 'DoctorsController@index',
        'as' => 'doctors.index'
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
