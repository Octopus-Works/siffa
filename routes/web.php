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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/reports', 'PagesController@reports')->name('reports');
Route::get('/shipping_offices', 'PagesController@shipping_offices')->name('shipping_offices');

Route::get('/company_info/{id}', function($id){
    $user = User::find($id); 
    return view('user/company_info')->withuser($user);
});

Route::get('/account_info', function () {
    if ( auth::check()){
        $user = User::find(auth::user()->id); 
        return view('user/account_info')->withuser($user);
    }
});


Route::get('/app_status', function () {
    return view('user/app_status');
});

Route::get('/application_info', 'ApplicationController@edit');
Route::post('/application_info', 'ApplicationController@update')->name('application_edit');


Auth::routes(['verify' => true]);
Route::post('/register', 'Auth\RegisterController@mail')->name('register');

// Route::get('/verification', function (){
//     return view('register'); 
// });

// Route::post('/verification', 'Auth\MailSendingController@mail')->name('verification'); 
//contact us route
// Route::get('/contact', [
// 'uses' => 'ContactMessageController@create'
// ]);
// Route::post('/contact', [
//     'uses' => 'ContactMessageController@send'
// ]);

Route::get('/view_messages', function () {
    return view('user/view_messages');
});

Route::get('/rms/view_messages', function () {
    return view('rms/view_messages');
});

Route::get('/rms/account_details', function(){
    return view('rms/account_details'); 
});

Route::get('/cms', function() {
    return view('cms.index'); 
})->name('cms'); 

Route::get('/rms', function() {
    return view('rms.index'); 
})->name('rms');