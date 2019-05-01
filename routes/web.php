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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('about');


Route::get('/reports', function () {
    return view('pages/reports&publications');
});

Route::get('/account_info', function () {
    return view('user/account_info');
});

Route::get('/company_info', function () {
    return view('user/company_info');
});

Route::get('/app_status', function () {
    return view('user/app_status');
});

Route::get('/application_info', 'ApplicationController@edit');
Route::post('/application_info', 'ApplicationController@update')->name('application_edit');

Route::get('/shipping_offices', function () {
    $users = User::all();
    return view('pages/shipping_offices')->withusers($users);
});

Auth::routes(['verify' => true]);
Route::post('/register', 'Auth\RegisterController@mail')->name('register');

// Route::get('/verification', function (){
//     return view('register'); 
// });

// Route::post('/verification', 'Auth\MailSendingController@mail')->name('verification'); 
//contact us route
Route::get('/contact', [
'uses' => 'ContactMessageController@create'
]);
Route::post('/contact', [
    'uses' => 'ContactMessageController@send'
]);


Route::get('/view_messages', function () {
    return view('pages/view_messages');
});
