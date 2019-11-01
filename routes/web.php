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
Route::view('/', 'pages.home');
Route::view('birthdays', 'pages.birthdays');
Route::view('weddings', 'pages.weddings');
Route::view('anniversaries', 'pages.anniversaries');
Route::view('corporate', 'pages.cooperate');

Route::get('order', 'OrderController@index');
Route::post('payment','PaymentController@pay');
Route::post('order', 'OrderController@store');

Route::view('payment', 'pages.payment');
Route::view('confirmation', 'pages.confirmation');

Route::get('orders', 'ReceptionController@index');
Route::get('orders/{id}', 'ReceptionController@show');
Route::get('update/{id}', 'ReceptionController@showDetails');
Route::put('/update/{id}', 'ReceptionController@update');

Route::get('mail', 'OrderController@store');

Route::view('/admin', 'admin.admin');
Route::get('orderDetails', 'AdminController@index');
Route::get('paymentDetails', 'AdminController@index2');
Route::get('users', 'AdminController@index3');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->middleware('admin')->name('admin');
Route::get('/reception', 'HomeController@reception')->middleware('reception')->name('reception');
