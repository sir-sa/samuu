<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/employees','EmployeesController');
|
*/

Route::get('/index','PagesController@index'  );


Route::get('/',  'PagesController@index');
 
Route::get('/about',  'PagesController@about');
Route::get('/services',  'PagesController@services');
Route::get('/footer',  'PagesController@footer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/managers','ManagersController');

Route::resource('/workers','WorkersController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-user')->group(function(){
    // Route::resource('/admin','UsersController',['except'=>['show','create','store']]);
    Route::resource('/users','UsersController',['except' => 'show','create','store']);
});