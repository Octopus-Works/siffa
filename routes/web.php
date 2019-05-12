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

Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/register', 'Auth\RegisterController@mail')->name('register');

Route::resource('messages', 'MessageController');

Route::get('/application_info', 'ApplicationController@edit');
Route::post('/application_info', 'ApplicationController@update')->name('application_edit');

Route::get('/company_info/{id}', function($id){
    $user = User::find($id); 
    return view('user/company_info')->withuser($user);
});

Route::get('/account_info', function () {
    if ( auth::check()){
        $user = User::find(auth::user()->id); 
        return view('user.index')->withuser($user);
    }
});


Route::get('/app_status', function () {
    return view('user/app_status');
});


//contact us route
// Route::get('/contact', [
// 'uses' => 'ContactMessageController@create'
// ]);
// Route::post('/contact', [
//     'uses' => 'ContactMessageController@send'
// ]);


Route::get('/rms/view_applications', function () {
    return view('rms/view_applications');
});

Route::get('/rms/application', function () {
    return view('rms/application');
});

Route::get('/rms/account_info', function(){
    
    if ( auth::check()){
        $user = User::find(auth::user()->id); 
        return view('rms.index')->withuser($user);
    }
    
});


Route::get('/rms/user_management', function(){

    $user = User::all(); 
    return view('rms.user_management')->withuser($user);
    
});