<?php
session_start();
use Illuminate\Notifications\RoutesNotifications;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
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

/************************************************* ADMIN */
Route::get('/admin', 'AdminController@login')->name('admin.login');
// Route::get('/home', 'AdminController@index')->name('admin.index');
Route::get('/index', 'AdminController@index')->name('admin.index');
Route::get('/edit_profile', 'AdminController@edit')->name('admin.edit.profile');
Route::get('/settings', 'AdminController@settings')->name('admin.settings');
Route::get('/settings_done', 'AdminController@done')->name('admin.settings.done');
Route::post('/resets', 'AdminController@reset')->name('admin.password_reset');

Route::post('/edit_profile', 'AdminController@save')->name('admin.save.profile');



Route::post('/admin/ajax', 'AjaxController@ajax')/* ->name('admin.ajax') */;

Auth::routes();



/*
Route::get('/car/create', 'CarController@createByUser')->name('car.createByUser');
Route::post('/scarbyuser', 'CarController@storeByUser')->name('car.storeByUser'); */
Route::get('/admin/car/create', 'CarController@create')->name('car.create');
Route::post('/scar', 'CarController@store')->name('car.store');

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
Route::get('/admin/home/infos', 'HomeController@createInfos')->name('homeInfos.create');
Route::post('/shomeinfos', 'HomeController@storeInfos')->name('homeInfos.store');

Route::get('/admin/reservationCar/delete/{reservation}', 'ReservationCarController@destroy')->name('reservationC.delete');
Route::get('/admin/reservationImmoL/delete/{reservation}', 'ReservationLocationController@destroy')->name('reservationIL.delete');
Route::get('/admin/reservationImmoV/delete/{reservation}', 'ReservationVenteController@destroy')->name('reservationIV.delete');

/* passwords */
Route::get('/forgetPassword', 'Auth\ResetPasswordController@email')->name('password.forget');
Route::post('/fsendingResetLink', 'Auth\ResetPasswordController@sendEmail')->name('password.send');



Route::get('/reset_password/{user}/{token}', 'Auth\ResetPasswordController@prev_reset')->name('password.prevreset');
Route::post('/reset_password_', 'Auth\ResetPasswordController@reset')->name('password.reset');

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

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/car/create', 'CarController@createByUser')->name('car.createByUser');
Route::post('/scarbyuser', 'CarController@storeByUser')->name('car.storeByUser');

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin/car/create', 'CarController@create')->name('car.create');
Route::post('/scar', 'CarController@store')->name('car.store');

Route::get('/admin/car/edit/{car}', 'CarController@edit')->name('car.edit');
Route::post('/scaredit/{car}', 'CarController@storeEdit')->name('car.storeEdit');

Route::get('/admin/car/{categorie}', 'AdminController@indexCar')->name('adminCar.index');
Route::get('/admin/immo/{categorie}', 'AdminController@indexImmo')->name('admin.immobilier');
Route::post('immo/create', 'ImmobilierController@create')->name('immobilier.create');
Route::get('immo/create/index', 'ImmobilierController@indexCreate')->name('immobilier.indexCreate');
Route::get('immo/destroy/{immobilier}', 'ImmobilierController@destroy')->name('admin.immo.delete');
 Route::get('immo/update/{immobilier}', 'ImmobilierController@indexUpdate')->name('admin.immobilier.indexUpdate');




Route::post('/simmoedit/{immobilier}', 'ImmobilierController@update')->name('admin.immobilier.update');

Route::get('/admin/car/delete/{car}', 'CarController@delete')->name('car.delete');

Route::get('/admin/home/carasoul', 'HomeController@createCarasoul')->name('homeCarasoul.create');
Route::post('/shomecarasoul/{carasoul}', 'HomeController@storeCarasoul')->name('homeCarasoul.store');

Route::get('/admin/home/sections', 'HomeController@createSections')->name('homeSections.create');
Route::post('/shomesections/{section}', 'HomeController@storeSections')->name('homeSections.store');

Route::get('/test', 'ImmobilierController@test')->name('immobilier.index');

Auth::routes();

/***** Site */

 if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = "fr";
}
Route::redirect('/', '/'.$_SESSION['lang']);

Route::group(['prefix' => '{lang}'], function () {


Route::get('/', 'HomeController@index')->name('home');

/*********** */
Route::get('/cars/{categorie}', 'CarController@index')->name('car.index');
Route::get('/details/{car}', 'CarController@show')->name('car.show');
Route::get('/reservation/{car}', 'ReservationCarController@create')->name('reservationCar.create');

Route::post('/rs', 'ReservationCarController@store')->name('reservationCar.store');

Route::get('/reservationimmol/{immobilier}', 'ReservationLocationController@create')->name('reservationLocation.create');
Route::post('/rsimmol', 'ReservationLocationController@store')->name('reservationLocation.store');

Route::get('/reservationimmov/{immobilier}', 'ReservationVenteController@create')->name('reservationVente.create');
Route::post('/rsimmov', 'ReservationVenteController@store')->name('reservationVente.store');

Route::get('/immo/create', 'ImmobilierController@createImmoUser')->name('immoByUser.create');
Route::post('/createimmo', 'ImmobilierController@storeImmoUser')->name('immoByUser.store');

Route::get('/immo/type/{mycategorie}/{type}', 'ImmobilierController@index')->name('immobilier.show');


Route::get('/details_immo/{immobilier}', 'ImmobilierController@show')->name('immo.show');

Route::get('/car/create', 'CarController@createByUser')->name('car.createByUser');
Route::post('/scarbyuser', 'CarController@storeByUser')->name('car.storeByUser');

Route::get('/error/404', function(){
    return view("errors.404");
})->name('error.404');

});

