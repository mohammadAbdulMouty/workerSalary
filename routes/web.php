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

Route::group(['prefix'=>'/'],function(){
    Route::get('spical/worker','WorkerController@spcialWorker');
    Route::post('spical/worker','WorkerController@AjaxspcialWorker');
});
Route::get('/worker/add','WorkerController@create');
Route::post('/worker/add','WorkerController@store');
Route::group(['prefix'=>'/work/hour/'],function(){
    Route::get('add','workHourController@create');
    Route::post('add','workHourController@store');
    Route::get('special','workHourController@special');
    Route::post('special','workHourController@specialpost');
});


Route::group(['prefix'=>'/hour/price'],function(){
    Route::get('/','priceHourController@index');
    Route::get('/add','priceHourController@create');
    Route::get('/add','priceHourController@create');
});

Route::post('/hour/price/add','priceHourController@store');
Route::get('/payment/add','paymentController@create');
Route::post('/payment/add','paymentController@store');
Route::get('/depts/add','deptsController@create');
Route::post('/depts/add','deptsController@store');
