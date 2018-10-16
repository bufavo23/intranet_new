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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routes
Route::middleware('auth')->group(function() {
	//roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
	->middleware('permission:roles.create');
	Route::get('roles', 'RoleController@index')->name('roles.index')
	->middleware('permission:roles.index');
	Route::get('roles/create', 'RoleController@create')->name('roles.create')
	->middleware('permission:roles.create');
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
	->middleware('permission:roles.edit');
	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
	->middleware('permission:roles.show');
	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
	->middleware('permission:roles.destroy');
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
	->middleware('permission:roles.edit');

	//Concepts
	Route::post('concepts/store', 'ConceptController@store')->name('concepts.store')
	->middleware('permission:concepts.create');
	Route::get('concepts', 'ConceptController@index')->name('concepts.index')
	->middleware('permission:concepts.index');
	Route::get('concepts/create', 'ConceptController@create')->name('concepts.create')
	->middleware('permission:concepts.create');
	Route::put('concepts/{role}', 'ConceptController@update')->name('concepts.update')
	->middleware('permission:concepts.edit');
	Route::get('concepts/{role}', 'ConceptController@show')->name('concepts.show')
	->middleware('permission:concepts.show');
	Route::delete('concepts/{role}', 'ConceptController@destroy')->name('concepts.destroy')
	->middleware('permission:concepts.destroy');
	Route::get('concepts/{role}/edit', 'ConceptController@edit')->name('concepts.edit')
	->middleware('permission:concepts.edit');

	//User
	Route::get('users', 'UserController@index')->name('users.index')
	->middleware('permission:users.index');
	Route::put('users/{role}', 'UserController@update')->name('users.update')
	->middleware('permission:users.edit');
	Route::get('users/{role}', 'UserController@show')->name('users.show')
	->middleware('permission:users.show');
	Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
	->middleware('permission:users.destroy');
	Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
	->middleware('permission:users.edit');
	
	
});