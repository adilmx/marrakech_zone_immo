<?php

use Illuminate\Notifications\RoutesNotifications;
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

//routes just for testing images
Route::post('/mytest', 'TestController@edit') ;
Route::get('/test', function(){
    return view('test');
}) ;
//routes for immobiliers ventes
 */Auth::routes();
Route::get('/immo_vente', 'ImmobilierController@index')->name('immobilier_vente.index');
Route::get('/immo_location', 'ImmobilierController@show_location')->name('immobilier_loc.index');

Route::get('/details_immo/{immobilier}', 'ImmobilierController@show')->name('immo.show');

/************************************************* ADMIN */
Route::get('/admin', 'AdminController@login')->name('admin.login');
// Route::get('/home', 'AdminController@index')->name('admin.index');
Route::get('/index', 'AdminController@index')->name('admin.index');
Route::get('/edit_profile', 'AdminController@edit')->name('admin.edit.profile');
Route::get('/settings', 'AdminController@settings')->name('admin.settings');
Route::get('/settings_done', 'AdminController@done')->name('admin.settings.done');
Route::post('/resets', 'AdminController@reset')->name('admin.password_reset');

Route::post('/edit_profile', 'AdminController@save')->name('admin.save.profile');







Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin/car/create', 'CarController@create')->name('car.create');
Route::post('/scar', 'CarController@store')->name('car.store');

Route::get('/admin/car/edit/{car}', 'CarController@edit')->name('car.edit');
Route::post('/scaredit/{car}', 'CarController@storeEdit')->name('car.storeEdit');

Route::get('/admin/car/{categorie}', 'AdminController@indexCar')->name('adminCar.index');

Route::get('/admin/car/delete/{car}', 'CarController@delete')->name('car.delete');

Route::get('/admin/home/carasoul', 'HomeController@createCarasoul')->name('homeCarasoul.create');
Route::post('/shomecarasoul/{carasoul}', 'HomeController@storeCarasoul')->name('homeCarasoul.store');

Route::get('/admin/home/sections', 'HomeController@createSections')->name('homeSections.create');
Route::post('/shomesections/{section}', 'HomeController@storeSections')->name('homeSections.store');
