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

Route::namespace('Frontend')->group(function(){

    Route::prefix('site')->group(function(){
        Route::prefix('home')->group(function(){
            Route::get('/','HomeController@index')->name('site.home.index');
            Route::get('/about','HomeController@about')->name('site.home.about');
            Route::get('/department','HomeController@department')->name('site.home.department');
            Route::get('/gallery','HomeController@gallery')->name('site.home.gallery');
            Route::get('/get-region/{id}','HomeController@regionlist')->name('site.home.regionlist');
             Route::get('/get-hospital/{id}','HomeController@hospitallist')->name('site.home.hospitallist');
             Route::get('/get-department/{id}','HomeController@departmentlist')->name('site.home.departmentlist');
             Route::get('{id}/show','HomeController@show')->name('site.home.show');
             Route::get('/get-new/{id}','HomeController@newlist')->name('site.home.newlist');
             Route::get('{id}/detail','HomeController@detail')->name('site.home.detail');
            });
        Route::prefix('appointment')->group(function(){
            Route::post('add','AppointmentController@create')->name('site.appointment.create');
            Route::post('create','AppointmentController@add')->name('site.appointment.add');
            Route::get('{id}/list','AppointmentController@index')->name('site.appointment.index');
            Route::delete('{id}','AppointmentController@destroy')->name('site.appointment.destroy');
            Route::get('{id}/show','AppointmentController@show')->name('site.appointment.show');

            });
            Route::get('/finddoctor','FindController@get')->name('site.finddoctor.get');
            Route::get('/finddoctor/store','FindController@getStore')->name('site.finddoctor.getStore');
            Route::get('/doctorlist','FindController@doctorlist')->name('site.finddoctor.doctorlist');
            Route::get('/storelist','FindController@storelist')->name('site.finddoctor.storelist');


        Route::prefix('user')->group(function(){
            Route::get('{id}/add','UserController@create')->name('site.user.create');
            Route::post('/add','UserController@store')->name('site.user.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/show','UserController@show')->name('site.user.show');
            Route::get('{id}/edit','UserController@edit')->name('site.user.edit');
            Route::post('{id}/update','UserController@update_post')->name('site.user.update_post');
            Route::post('{id}','UserController@verification')->name('site.user.verification');
            Route::get('/forgetpassword','UserController@forgetpassword')->name('site.user.forgetpassword');
            Route::post('{id}/getpassword','UserController@getpassword')->name('site.user.getpassword');
            Route::post('{id}/setpassword','UserController@setpassword')->name('site.user.setpassword');
            Route::post('{id}/setpassword1','UserController@setpassword1')->name('site.user.setpassword1');

            });
        Route::get('/logout','AuthController@logout')->name('site.logout');
        Route::get('/login','AuthController@viewLogin')->name('site.login');
        Route::post('/login','AuthController@login');
        });
});



