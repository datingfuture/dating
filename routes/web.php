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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['admin']],function (){


  Route::get('/admin/dashboard','AdminController@dashboard');
  Route::get('/admin/settings','AdminController@settings');

  Route::get('/admin/view_users','UsersController@viewUsers');

  Route::post('/admin/update-user-status','UsersController@updateUserStatus');

  Route::post('/admin/update-photo-status','UsersController@updatePhotoStatus');


});



Route::match(['get', 'post'],'/admin','AdminController@login');


Route::get('/','FrontController@front');

Route::any('/signup', 'UsersController@signup');

Route::get('/check-username','UsersController@checkUsername');


Route::get('/check-email','UsersController@checkEmail');


Route::any('/signin','UsersController@signin');

Route::group(['middleware'=>['userslogin']],function(){

Route::any('/phase/2','UsersController@phase2');

Route::get('/inreview','UsersController@inreview');

Route::any('/phase/3','UsersController@phase3');

Route::post('/photoupload','UsersController@postphoto');

Route::get('/delete-photo/{photo}','UsersController@deletePhoto');


Route::match(['get','post'],'/contact/{username}','UsersController@contactUser');


 Route::get('/shooted-messages','UsersController@shootedMessages');

 Route::get('/replies','UsersController@replies');


Route::get('/delete-reply/{id}','UsersController@deleteReply');

 Route::post('/update-reply','UsersController@updateReply');


});


Route::get('/check-username','UsersController@checkUsername');


Route::any('/profile/{username}', 'UsersController@viewProfile');

Route::get('/default-photo/{photo}','UsersController@defaultPhoto');


Route::any('/search','UsersController@searchProfile');


Route::get('/logout','UsersController@logout');


































































