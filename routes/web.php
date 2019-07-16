<?php

Use App\User;

/*
|--------------------------------------------------------------------------
| guset Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/home',             'HomeController@index')->name('home');
Route::get('/redirect',         'HomeController@redirect')->name('redirect');
Route::get('/',                 'HomeController@index')->name('index');
Route::get('/about',            'PagesController@about')->name('about');
Route::get('/contact',          'PagesController@contact')->name('contact');
Route::get('/reports',          'PagesController@reports')->name('reports');
Route::get('/shipping_offices', 'PagesController@shipping_offices')->name('shipping_offices');
Route::get('mission_statement', 'PagesController@mission')->name('mission_statement');
Route::get('laws',              'PagesController@laws')->name('laws');
Route::get('trading_conditions','PagesController@trading_conditions')->name('trading_conditions');
Route::get('become_member',     'PagesController@becomeamember')->name('become_member');
Route::get('members_list',      'PagesController@members_list')->name('members_list');
Route::get('calendar',          'PagesController@calendar')->name('calendar');
Route::get('events',            'PagesController@events')->name('events');
Route::get('latest',            'PagesController@latest')->name('latest');
Route::get('archive',           'PagesController@archive')->name('archive');
Route::get('president_message', 'PagesController@president_message')->name('president_message');
Route::get('board_members',     'PagesController@board_members')->name('board_members');
Route::get('/company_info/{id}','UserController@companyInfo');
Route::post('/contact',         'ContactMessageController@send');
Route::post('/members_list',    'PagesController@test')->name('test');


/*
|--------------------------------------------------------------------------
| Cms Routes
|--------------------------------------------------------------------------
|
|
*/
Route::group(['prefix' => 'cms' , 'middleware' => 'auth' ], function()
{
    //All the routes that belongs to the group goes here
    Route::get('/', function(){
        return view('cms.index');
    });

});


/*
|--------------------------------------------------------------------------
| Rms Routes
|--------------------------------------------------------------------------
|
|Route Domain : /rms
|
*/
Route::group(['prefix' => 'rms' , 'middleware' => ['auth', 'rms'] ], function()
{
    //All the routes that belongs to the group goes here
    Route::get('/',                             'RecipientController@index');
    Route::get('/view_applications',            'RecipientController@applications_view');
    Route::get('/view_messages',                'RecipientController@messages_view');
    Route::get('/application/{id}',             'RecipientController@application');
    Route::get('/user_management',              'RecipientController@recipients_management');
    Route::post('/user_management/block/{id}',  'RecipientController@block')->name('blocking');
    Route::post('/user_management/unblock/{id}','RecipientController@unblock')->name('unblocking');
    Route::post('/application/{id}/approved',   'RecipientController@approved');
    Route::post('/application/{id}/rejected',   'RecipientController@rejected');
    Route::post('/',                            'RecipientController@rmsMiniUpdate')->name('rms.mini_edit');
    Route::post('/photo_upload',                'RecipientController@rmsPhotoUpload')->name('rms.photo_upload');


});


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
|Route Domain : /user
|
*/
Route::group(['prefix' => 'user' , 'middleware' => ['auth', 'user'] ] , function()
{
    //All the routes that belongs to the group goes here
    Route::get('/',                     'UserController@accountInfo');
    Route::get('/app_status',           'UserController@appStatus');
    Route::get('/company_info/{id}',    'UserController@userCompanyInfo');
    Route::get('/application_info',     'ApplicationController@edit');
    Route::post('/',                    'ApplicationController@miniUpdate')->name('mini_edit');
    Route::post('/application_info',    'ApplicationController@update')->name('application_edit');
    Route::post('/photo_upload',        'UserController@photoUpload')->name('photo_upload');
    Route::post('/photo_upload1',       'UserController@photoUpload1')->name('photo_upload1');

    Route::post('/payment_notification','UserController@paymentNotification')->name('paymentNotification');
});
/*
|--------------------------------------------------------------------------
| Messages Routes resource
|--------------------------------------------------------------------------
|
|Route Domain : 
|
*/
Route::resource('messages', 'MessageController');
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
|
|
*/
Auth::routes(['verify' => true]);
Route::get('/logout',       'Auth\LoginController@logout')->name('logout');
Route::post('/register',    'Auth\RegisterController@mail')->name('register');
/*
|--------------------------------------------------------------------------
| Voyager Routes
|--------------------------------------------------------------------------
|
|
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/calendar' , 'AdminController@getCalendarPage')->name('calendarr');
    Route::post('/calendar', 'AdminController@getEventsData');
    
});

