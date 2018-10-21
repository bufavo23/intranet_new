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

	//Calls
	Route::post('calls/store', 'CallController@store')->name('calls.store')
	->middleware('permission:calls.create');
	Route::get('calls', 'CallController@index')->name('calls.index')
	->middleware('permission:calls.index');
	Route::get('calls/create', 'CallController@create')->name('calls.create')
	->middleware('permission:calls.create');
	Route::put('calls/{call}', 'CallController@update')->name('calls.update')
	->middleware('permission:calls.edit');
	Route::get('calls/{call}', 'CallController@show')->name('calls.show')
	->middleware('permission:calls.show');
	Route::delete('calls/{call}', 'CallController@destroy')->name('calls.destroy')
	->middleware('permission:calls.destroy');
	Route::get('calls/{call}/edit', 'CallController@edit')->name('calls.edit')
	->middleware('permission:calls.edit');

	//Clients
	Route::post('clients/store', 'ClientController@store')->name('clients.store')
	->middleware('permission:clients.create');
	Route::get('clients', 'ClientController@index')->name('clients.index')
	->middleware('permission:clients.index');
	Route::get('clients/create', 'ClientController@create')->name('clients.create')
	->middleware('permission:clients.create');
	Route::put('clients/{client}', 'ClientController@update')->name('clients.update')
	->middleware('permission:clients.edit');
	Route::get('clients/{client}', 'ClientController@show')->name('clients.show')
	->middleware('permission:clients.show');
	Route::delete('clients/{client}', 'ClientController@destroy')->name('clients.destroy')
	->middleware('permission:clients.destroy');
	Route::get('clients/{client}/edit', 'ClientController@edit')->name('clients.edit')
	->middleware('permission:clients.edit');

	//Contact
	Route::post('contacts/store', 'ContactController@store')->name('contacts.store')
	->middleware('permission:contacts.create');
	Route::get('contacts', 'ContactController@index')->name('contacts.index')
	->middleware('permission:contacts.index');
	Route::get('contacts/create', 'ContactController@create')->name('contacts.create')
	->middleware('permission:contacts.create');
	Route::put('contacts/{contact}', 'ContactController@update')->name('contacts.update')
	->middleware('permission:contacts.edit');
	Route::get('contacts/{contact}', 'ContactController@show')->name('contacts.show')
	->middleware('permission:contacts.show');
	Route::delete('contacts/{contact}', 'ContactController@destroy')->name('contacts.destroy')
	->middleware('permission:contacts.destroy');
	Route::get('contacts/{contact}/edit', 'ContactController@edit')->name('contacts.edit')
	->middleware('permission:contacts.edit');

	//Destination
	Route::post('destinations/store', 'DestinationController@store')->name('destinations.store')
	->middleware('permission:destinations.create');
	Route::get('destinations', 'DestinationController@index')->name('destinations.index')
	->middleware('permission:destinations.index');
	Route::get('destinations/create', 'DestinationController@create')->name('destinations.create')
	->middleware('permission:destinations.create');
	Route::put('destinations/{destination}', 'DestinationController@update')->name('destinations.update')
	->middleware('permission:destinations.edit');
	Route::get('destinations/{destination}', 'DestinationController@show')->name('destinations.show')
	->middleware('permission:destinations.show');
	Route::delete('destinations/{destination}', 'DestinationController@destroy')->name('destinations.destroy')
	->middleware('permission:destinations.destroy');
	Route::get('destinations/{destination}/edit', 'DestinationController@edit')->name('destinations.edit')
	->middleware('permission:destinations.edit');

	//Item
	Route::post('items/store', 'ItemController@store')->name('items.store')
	->middleware('permission:items.create');
	Route::get('items', 'ItemController@index')->name('items.index')
	->middleware('permission:items.index');
	Route::get('items/create', 'ItemController@create')->name('items.create')
	->middleware('permission:items.create');
	Route::put('items/{item}', 'ItemController@update')->name('items.update')
	->middleware('permission:items.edit');
	Route::get('items/{item}', 'ItemController@show')->name('items.show')
	->middleware('permission:items.show');
	Route::delete('items/{item}', 'ItemController@destroy')->name('items.destroy')
	->middleware('permission:items.destroy');
	Route::get('items/{item}/edit', 'ItemController@edit')->name('items.edit')
	->middleware('permission:items.edit');

	//Motives
	Route::post('motives/store', 'MotiveController@store')->name('motives.store')
	->middleware('permission:motives.create');
	Route::get('motives', 'MotiveController@index')->name('motives.index')
	->middleware('permission:motives.index');
	Route::get('motives/create', 'MotiveController@create')->name('motives.create')
	->middleware('permission:motives.create');
	Route::put('motives/{motive}', 'MotiveController@update')->name('motives.update')
	->middleware('permission:motives.edit');
	Route::get('motives/{motive}', 'MotiveController@show')->name('motives.show')
	->middleware('permission:motives.show');
	Route::delete('motives/{motive}', 'MotiveController@destroy')->name('motives.destroy')
	->middleware('permission:motives.destroy');
	Route::get('motives/{motive}/edit', 'MotiveController@edit')->name('motives.edit')
	->middleware('permission:motives.edit');

	//News
	Route::post('news/store', 'NewsController@store')->name('news.store')
	->middleware('permission:news.create');
	Route::get('news', 'NewsController@index')->name('news.index')
	->middleware('permission:news.index');
	Route::get('news/create', 'NewsController@create')->name('news.create')
	->middleware('permission:news.create');
	Route::put('news/{news}', 'NewsController@update')->name('news.update')
	->middleware('permission:news.edit');
	Route::get('news/{news}', 'NewsController@show')->name('news.show')
	->middleware('permission:news.show');
	Route::delete('news/{news}', 'NewsController@destroy')->name('news.destroy')
	->middleware('permission:news.destroy');
	Route::get('news/{news}/edit', 'NewsController@edit')->name('news.edit')
	->middleware('permission:news.edit');

	//Passenger
	Route::post('passengers/store', 'PassengerController@store')->name('passengers.store')
	->middleware('permission:passengers.create');
	Route::get('passengers', 'PassengerController@index')->name('passengers.index')
	->middleware('permission:passengers.index');
	Route::get('passengers/create', 'PassengerController@create')->name('passengers.create')
	->middleware('permission:passengers.create');
	Route::put('passengers/{passenger}', 'PassengerController@update')->name('passengers.update')
	->middleware('permission:passengers.edit');
	Route::get('passengers/{passenger}', 'PassengerController@show')->name('passengers.show')
	->middleware('permission:passengers.show');
	Route::delete('passengers/{passenger}', 'PassengerController@destroy')->name('passengers.destroy')
	->middleware('permission:passengers.destroy');
	Route::get('passengers/{passenger}/edit', 'PassengerController@edit')->name('passengers.edit')
	->middleware('permission:passengers.edit');

	//Provider
	Route::post('providers/store', 'ProviderController@store')->name('providers.store')
	->middleware('permission:providers.create');
	Route::get('providers', 'ProviderController@index')->name('providers.index')
	->middleware('permission:providers.index');
	Route::get('providers/create', 'ProviderController@create')->name('providers.create')
	->middleware('permission:providers.create');
	Route::put('providers/{provider}', 'ProviderController@update')->name('providers.update')
	->middleware('permission:providers.edit');
	Route::get('providers/{provider}', 'ProviderController@show')->name('providers.show')
	->middleware('permission:providers.show');
	Route::delete('providers/{provider}', 'ProviderController@destroy')->name('providers.destroy')
	->middleware('permission:providers.destroy');
	Route::get('providers/{provider}/edit', 'ProviderController@edit')->name('providers.edit')
	->middleware('permission:providers.edit');

	//Refund
	Route::post('refunds/store', 'RefundController@store')->name('refunds.store')
	->middleware('permission:refunds.create');
	Route::get('refunds', 'RefundController@index')->name('refunds.index')
	->middleware('permission:refunds.index');
	Route::get('refunds/create', 'RefundController@create')->name('refunds.create')
	->middleware('permission:refunds.create');
	Route::put('refunds/{refund}', 'RefundController@update')->name('refunds.update')
	->middleware('permission:refunds.edit');
	Route::get('refunds/{refund}', 'RefundController@show')->name('refunds.show')
	->middleware('permission:refunds.show');
	Route::delete('refunds/{refund}', 'RefundController@destroy')->name('refunds.destroy')
	->middleware('permission:refunds.destroy');
	Route::get('refunds/{refund}/edit', 'RefundController@edit')->name('refunds.edit')
	->middleware('permission:refunds.edit');

	//Statu
	Route::post('status/store', 'StatuController@store')->name('status.store')
	->middleware('permission:status.create');
	Route::get('status', 'StatuController@index')->name('status.index')
	->middleware('permission:status.index');
	Route::get('status/create', 'StatuController@create')->name('status.create')
	->middleware('permission:status.create');
	Route::put('status/{statu}', 'StatuController@update')->name('status.update')
	->middleware('permission:status.edit');
	Route::get('status/{statu}', 'StatuController@show')->name('status.show')
	->middleware('permission:status.show');
	Route::delete('status/{statu}', 'StatuController@destroy')->name('status.destroy')
	->middleware('permission:status.destroy');
	Route::get('status/{statu}/edit', 'StatuController@edit')->name('status.edit')
	->middleware('permission:status.edit');

	//StatuSend
	Route::post('statusends/store', 'StatuSendController@store')->name('statusends.store')
	->middleware('permission:statusends.create');
	Route::get('statusends', 'StatuSendController@index')->name('statusends.index')
	->middleware('permission:statusends.index');
	Route::get('statusends/create', 'StatuSendController@create')->name('statusends.create')
	->middleware('permission:statusends.create');
	Route::put('statusends/{statusend}', 'StatuSendController@update')->name('statusends.update')
	->middleware('permission:statusends.edit');
	Route::get('statusends/{statusend}', 'StatuSendController@show')->name('statusends.show')
	->middleware('permission:statusends.show');
	Route::delete('statusends/{statusend}', 'StatuSendController@destroy')->name('statusends.destroy')
	->middleware('permission:statusends.destroy');
	Route::get('statusends/{statusend}/edit', 'StatuSendController@edit')->name('statusends.edit')
	->middleware('permission:statusends.edit');

	//TypeItem
	Route::post('typeitems/store', 'TypeItemController@store')->name('typeitems.store')
	->middleware('permission:typeitems.create');
	Route::get('typeitems', 'TypeItemController@index')->name('typeitems.index')
	->middleware('permission:typeitems.index');
	Route::get('typeitems/create', 'TypeItemController@create')->name('typeitems.create')
	->middleware('permission:typeitems.create');
	Route::put('typeitems/{typeitem}', 'TypeItemController@update')->name('typeitems.update')
	->middleware('permission:typeitems.edit');
	Route::get('typeitems/{typeitem}', 'TypeItemController@show')->name('typeitems.show')
	->middleware('permission:typeitems.show');
	Route::delete('typeitems/{typeitem}', 'TypeItemController@destroy')->name('typeitems.destroy')
	->middleware('permission:typeitems.destroy');
	Route::get('typeitems/{typeitem}/edit', 'TypeItemController@edit')->name('typeitems.edit')
	->middleware('permission:typeitems.edit');

	//TypeProvider
	Route::post('typeproviders/store', 'TypeProviderController@store')->name('typeproviders.store')
	->middleware('permission:typeproviders.create');
	Route::get('typeproviders', 'TypeProviderController@index')->name('typeproviders.index')
	->middleware('permission:typeproviders.index');
	Route::get('typeproviders/create', 'TypeProviderController@create')->name('typeproviders.create')
	->middleware('permission:typeitypeproviderstem.create');
	Route::put('typeproviders/{typeprovider}', 'TypeProviderController@update')->name('typeproviders.update')
	->middleware('permission:typeproviders.edit');
	Route::get('typeproviders/{typeprovider}', 'TypeProviderController@show')->name('typeproviders.show')
	->middleware('permission:typeproviders.show');
	Route::delete('typeproviders/{typeprovider}', 'TypeProviderController@destroy')->name('typeproviders.destroy')
	->middleware('permission:typeproviders.destroy');
	Route::get('typeproviders/{typeprovider}/edit', 'TypeProviderController@edit')->name('typeproviders.edit')
	->middleware('permission:typeproviders.edit');

	//User
	Route::get('users', 'UserController@index')->name('users.index')
	->middleware('permission:users.index');
	Route::put('users/{user}', 'UserController@update')->name('users.update')
	->middleware('permission:users.edit');
	Route::get('users/{user}', 'UserController@show')->name('users.show')
	->middleware('permission:users.show');
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
	->middleware('permission:users.destroy');
	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
	->middleware('permission:users.edit');
	
	
});