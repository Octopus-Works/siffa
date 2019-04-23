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

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/reports', function () {
    return view('pages/reports&publications');
});

Route::get('/officeinfo', function () {
    return view('pages/officeinfo');
});

Route::get('/shippingoffices', function () {
    return view('pages/shippingoffices');
});
Route::post('/', 'ApplicationController@mail')->name('ApplicationSubmit'); 
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verification', function (){
    return view('register'); 
});

Route::post('/verification', 'Auth\MailSendingController@mail')->name('verification'); 
//contact us route
Route::get('/contact', [
'uses' => 'ContactMessageController@create'
]);
Route::post('/contact', [
    'uses' => 'ContactMessageController@send'
]);
