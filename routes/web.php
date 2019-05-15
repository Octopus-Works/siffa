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

Route::get('mission_statement', 'PagesController@mission')->name('mission_statement');
Route::get('laws', 'PagesController@laws')->name('laws');
Route::get('trading_conditions', 'PagesController@trading_conditions')->name('trading_conditions');
Route::get('become_member', 'PagesController@becomeamember')->name('become_member');
Route::get('members_list', 'PagesController@members_list')->name('members_list');
Route::get('calendar', 'PagesController@calendar')->name('calendar');
Route::get('events', 'PagesController@events')->name('events');
Route::get('latest', 'PagesController@latest')->name('latest');
Route::get('archive', 'PagesController@archive')->name('archive');
Route::get('president_message', 'PagesController@president_message')->name('president_message');
Route::get('board_members', 'PagesController@board_members')->name('board_members');

Route::get('/cms', function(){
    return view('cms.index');
});


Route::get('/rms', 'RecipientController@index');
Route::get('/rms/view_applications', 'RecipientController@applications_view');
Route::get('/rms/view_messages', 'RecipientController@messages_view');
Route::get('/rms/application', 'RecipientController@application');
Route::get('/rms/account_info', 'RecipientController@account_info');
Route::get('/rms/user_management', 'RecipientController@recipients_management');
Route::post('rms/user_management/block/{id}', 'RecipientController@block')->name('blocking');
Route::post('rms/user_management/unblock/{id}', 'RecipientController@unblock')->name('unblocking');

Route::get('/app_status', 'AdminController@app_status');
Route::get('/user/company_info/{id}', 'AdminController@company_info');
Route::get('/company_info/{id}', 'AdminController@company_info'); // For Guest

Route::get('/account_info', 'AdminController@account_info');


Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/register', 'Auth\RegisterController@mail')->name('register');


Route::resource('messages', 'MessageController');

Route::get('/application_info', 'ApplicationController@edit');
Route::post('/application_info', 'ApplicationController@update')->name('application_edit');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//contact us route
// Route::get('/contact', [
// 'uses' => 'ContactMessageController@create'
// ]);
// Route::post('/contact', [
//     'uses' => 'ContactMessageController@send'
// ]);
