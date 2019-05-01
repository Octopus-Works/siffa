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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/reports', 'PagesController@reports')->name('reports');
Route::get('/shipping_offices', 'PagesController@shipping_offices')->name('shipping_offices');

Route::get('/company_info/{id}', function($id){
    if ( auth::check()){
        $user = User::find(auth::user()->id); 
        $app = ApplicationDetail::find($id); 
        return view('user/company_info')->withuser($user);
    }

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
    return view('pages/view_messages');
});
