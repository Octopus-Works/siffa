<?php

Use App\User;
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
})->name('about');

Route::get('/reports', function () {
    return view('pages/reports&publications');
});

Route::get('/shippingoffices', function () {
    $users = User::all();
    return view('pages/shippingoffices')->withusers($users);
});
//Route::post('/', 'ApplicationController@mail')->name('ApplicationSubmit'); 

Auth::routes(['verify' => true]);
Route::post('/register', 'Auth\RegisterController@mail')->name('register');

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
