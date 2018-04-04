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




Route::prefix('shipment')->group(function(){
    Route::get('', 'ShipmentController@index')->name('shipment');
    Route::get('add', 'ShipmentController@add')->name('shipment-add');
    Route::post('store', 'ShipmentController@store')->name('shipment-store');
    Route::get('{id}', 'ShipmentController@show')->name('shipment-view');
    Route::get('edit/{id}', 'ShipmentController@edit')->name('shipment-edit');
    Route::put('put', 'ShipmentController@put')->name('shipment-put');
    Route::delete('delete/{id}', 'ShipmentController@delete')->name('shipment-delete');
});