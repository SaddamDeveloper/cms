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


Route::group(['middleware' => ['auth']], function () {

    /**
     * Reception Control over PagesController
     */
    Route::get('/', 'PagesController@index')->name('reception')->middleware('reception');
    Route::get('/create', 'PagesController@create')->middleware('reception');
    Route::get('/projects', 'PagesController@show')->middleware('reception');
    Route::get('/profile', 'PagesController@profile')->middleware('reception');
    Route::get('/pages/newdiv', 'PagesController@newDiv')->middleware('reception');
    Route::get('/showuser', 'PagesController@user')->middleware('reception');
    Route::get('/adduser', 'PagesController@addUser')->middleware('reception');

    /**
     * Admin Control over PagesController 
     */
    
    Route::get('/admin', 'PagesController@admin')->middleware('admin');
     /**
      * Employee Control over PagesController
      */
    Route::get('/employee', 'PagesController@employee')->middleware('employee');

    Route::resource('projects', 'ProjectsController');
    Route::resource('user', 'UserController');
});
Auth::routes([
    'register' => false
]);


