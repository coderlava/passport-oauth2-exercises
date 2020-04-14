<?php

use Illuminate\Support\Facades\Route;
use App\Api;

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

Route::view('/','index');
  Route::prefix('/qstrike')->group( function () {

  Route::get('/api/infos', 'ApiController@index');
  Route::get('/api/id/{id}', 'ApiController@id');
  Route::get('/api/names/', 'ApiController@names');
  Route::get('/api/names/id/{name_id}', 'ApiController@name_id');

});


#-------------- Testing Endpoint for Passport -------------------

Route::get('/brock','LoginApiController@login');

#Auth::routes();
#Route::get('/home', 'HomeController@index')->name('home');
