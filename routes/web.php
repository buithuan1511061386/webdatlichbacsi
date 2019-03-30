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


Route::namespace('Backend')->group(function(){

    Route::prefix('admin')->group(function(){


        Route::middleware('auth')->group(function(){
            Route::get('home', function () {
            return view('backend.master.home');
            });
             Route::get('logout','AuthController@logout')->name('admin.logout');
Route::resource('region','RegionController');
        Route::prefix('region')->group(function(){
            Route::get('list','RegionController@index')->name('admin.region.index');
            Route::get('add','RegionController@create')->name('admin.region.create');
            Route::post('add','RegionController@store')->name('admin.region.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','RegionController@edit')->name('admin.region.edit');
            Route::post('{id}','RegionController@update_post')->name('admin.region.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','RegionController@destroy')->name('admin.region.destroy');
            });
Route::resource('typeofnews','TypeofnewsController');
        Route::prefix('typeofnews')->group(function(){
            Route::get('list','TypeofnewsController@index')->name('admin.typeofnews.index');
            Route::get('add','TypeofnewsController@create')->name('admin.typeofnews.create');
            Route::post('add','TypeofnewsController@store')->name('admin.typeofnews.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','TypeofnewsController@edit')->name('admin.typeofnews.edit');
            Route::post('{id}','TypeofnewsController@update_post')->name('admin.typeofnews.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','TypeofnewsController@destroy')->name('admin.typeofnews.destroy');
            });
        Route::prefix('appointment')->group(function(){
            Route::get('{id}/list','AppointmentController@index')->name('admin.appointment.index');
            Route::delete('{id}','AppointmentController@destroy')->name('admin.appointment.destroy');
            Route::get('{id}/show','AppointmentController@show')->name('admin.appointment.show');
            });
Route::resource('news','NewsController');
        Route::prefix('news')->group(function(){
            Route::get('list','NewsController@index')->name('admin.news.index');
            Route::get('add','NewsController@create')->name('admin.news.create');
            Route::get('add','NewsController@create')->name('admin.news.create');
            Route::post('add','NewsController@store')->name('admin.news.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
             Route::get('{id}/show','NewsController@show')->name('admin.news.show');
            Route::get('{id}/edit','NewsController@edit')->name('admin.news.edit');
            Route::post('{id}','NewsController@update_post')->name('admin.news.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','NewsController@destroy')->name('admin.news.destroy');
            });

                Route::resource('department','DepartmentController');
        Route::prefix('department')->group(function(){
            Route::get('list','DepartmentController@index')->name('admin.department.index');
            Route::get('add','DepartmentController@create')->name('admin.department.create');
            Route::post('add','DepartmentController@store')->name('admin.department.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','DepartmentController@edit')->name('admin.department.edit');
            Route::post('{id}','DepartmentController@update_post')->name('admin.department.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','DepartmentController@destroy')->name('admin.department.destroy');
            });

         Route::resource('hospital','HospitalController');
        Route::prefix('hospital')->group(function(){
            Route::get('list','HospitalController@index')->name('admin.hospital.index');
            Route::get('add','HospitalController@create')->name('admin.hospital.create');
            Route::get('add','HospitalController@create')->name('admin.hospital.create');
            Route::post('add','HospitalController@store')->name('admin.hospital.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
            Route::get('{id}/edit','HospitalController@edit')->name('admin.hospital.edit');
            Route::post('{id}','HospitalController@update_post')->name('admin.hospital.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','HospitalController@destroy')->name('admin.hospital.destroy');
            });

            Route::resource('user','UserController');
        Route::prefix('user')->group(function(){
            Route::get('{id}/list','UserController@index')->name('admin.user.index');
            Route::get('{id}/add','UserController@create')->name('admin.user.create');
            Route::get('add','UserController@create')->name('admin.user.create');
            Route::post('add','UserController@store')->name('admin.user.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
             Route::get('{id}/show','UserController@show')->name('admin.user.show');
            Route::get('{id}/edit','UserController@edit')->name('admin.user.edit');
            Route::post('{id}','UserController@update_post')->name('admin.user.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','UserController@destroy')->name('admin.user.destroy');
            });
        Route::resource('store','StoreController');
        Route::prefix('store')->group(function(){
            Route::get('/list','StoreController@index')->name('admin.store.index');
            Route::get('/add','StoreController@create')->name('admin.store.create');
            Route::get('add','StoreController@create')->name('admin.store.create');
            Route::post('add','StoreController@store')->name('admin.store.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
             Route::get('{id}/show','StoreController@show')->name('admin.store.show');
            Route::get('{id}/edit','StoreController@edit')->name('admin.store.edit');
            Route::post('{id}','StoreController@update_post')->name('admin.store.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','StoreController@destroy')->name('admin.store.destroy');
            });
        Route::prefix('doctortime')->group(function(){
            Route::get('list','DoctortimeController@index')->name('admin.doctortime.index');
             Route::get('showall','DoctortimeController@showall')->name('admin.doctortime.showall');
            Route::get('add','DoctortimeController@create')->name('admin.doctortime.create');
            Route::get('add','DoctortimeController@create')->name('admin.doctortime.create');
            Route::post('add','DoctortimeController@store')->name('admin.doctortime.store');
            //Này là {id}/edit mới vào dc controller @@ show thì ko cần /edit l
             Route::get('{id}/show','DoctortimeController@show')->name('admin.doctortime.show');
            Route::get('{id}/edit','DoctortimeController@edit')->name('admin.doctortime.edit');
            Route::post('{id}','DoctortimeController@update_post')->name('admin.doctortime.update_post');
            // Route::put('{id}','RegionController@update')->name('admin.region.update');
            Route::delete('{id}','DoctortimeController@destroy')->name('admin.doctortime.destroy');
            });

        });

        Route::get('login','AuthController@viewLogin')->name('admin.login');

        Route::post('login','AuthController@login');

        });
});

