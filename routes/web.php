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


Route::get('/', 'HomeController@index')->name('home');

/* ces routes sont pour le test seulement  */
Route::get('/cars', 'CarController@index')->name('car.index');
// Route::get('/details', 'CarController@show')->name('car.show');

/*********** */
Route::get('/cars/{categorie}', 'CarController@index')->name('car.index');
Route::get('/details/{car}', 'CarController@show')->name('car.show');
Route::get('/reservation/{car}', 'ReservationCarController@create')->name('reservationCar.create');


Route::post('/rs', 'ReservationCarController@store')->name('reservationCar.store');

Route::get('/reservationimmol/{immobilier}', 'ReservationLocationController@create')->name('reservationLocation.create');
Route::post('/rsimmol', 'ReservationLocationController@store')->name('reservationLocation.store');

Route::get('/reservationimmov/{immobilier}', 'ReservationVenteController@create')->name('reservationVente.create');
Route::post('/rsimmov', 'ReservationVenteController@store')->name('reservationVente.store');
/*
Route::get('/reservationDone/{car}', 'ReservationCarController@done')->name('car.done');
Route::get('/reservationDoneimmol/{immobilier}', 'ReservationLocationController@done')->name('immol.done');
Route::get('/reservationDoneimmov/{immobilier}', 'ReservationVenteController@done')->name('immov.done'); */

/*

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//routes just for testing images
Route::post('/mytest', 'TestController@edit') ;
Route::get('/test', function(){
    return view('test');
}) ;
//routes for immobiliers ventes
 */
Route::get('/immo_vente', 'ImmobilierController@index')->name('immobilier_vente.index');
Route::get('/immo_location', 'ImmobilierController@show_location')->name('immobilier_loc.index');

Route::get('/details_immo/{immobilier}', 'ImmobilierController@show')->name('immo.show');

/************************************************* ADMIN */
Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('/admin/car', 'CarController@create')->name('car.create');
Route::post('/scar', 'CarController@store')->name('car.store');

Route::get('/admin/home/carasoul', 'HomeController@createCarasoul')->name('homeCarasoul.create');
Route::post('/shomecarasoul', 'HomeController@storeCarasoul')->name('homeCarasoul.store');

Route::get('/admin/home/sections', 'HomeController@createSections')->name('homeSections.create');
Route::post('/shomesections', 'HomeController@storeSections')->name('homeSections.store');
