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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
Route::prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.main');
	})->name('admin.home');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> Episode 3 dan 4
Route::group(['middleware'=>['auth']], function(){
	Route::prefix('admin')->group(function(){
		Route::get('/', function(){
			return view('admin.pages.dashboard');
		})->name('admin.home');
	});

<<<<<<< HEAD
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
>>>>>>> Episode 3 dan 4
=======
Route::group(['middleware'=>['auth']], function(){
	Route::prefix('admin')->group(function(){
	Route::get('/',function(){
		return view('admin.pages.dashboard');
	})->name('admin.home');

	Route::prefix('user')->group(function(){
		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
	   });
    });
>>>>>>> eps.7
});

Auth::routes();

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> eps.7
