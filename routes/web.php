<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/* ces routes sont pour le test seulement  */
Route::get('/cars', 'CarController@index')->name('car.index');
Route::get('/details', 'CarController@show')->name('car.show');

/*********** */
Route::get('/cars/{categorie}', 'CarController@index')->name('car.index');
Route::get('/details/{car}', 'CarController@show')->name('car.show');
Route::get('/reservation/{car}', 'ReservationCarController@create')->name('reservationCar.create');
Route::get('/admin', 'CarController@create')->name('car.create');
Route::post('/R', 'CarController@store')->name('car.store');
Route::post('/rs', 'ReservationCarController@store')->name('reservationCar.store');

Route::get('ajaxRequest', 'AjaxController@ajaxRequestPost');
Route::post('ajaxRequest', 'AjaxController@ajaxRequestPost')->name('ajaxRequest.post');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
