<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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

// Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/','App\Http\Controllers\index@dashboard')->name('dashboard');

//Route::get('/', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/jyotishtalk','App\Http\Controllers\index@show')->name('jyotishtalk')->middleware(['auth']);
Route::get('/jyotish_talk/','App\Http\Controllers\index@conversation')->name('jyotish_talk')->middleware('check');

Route::get('/subscription/','App\Http\Controllers\index@subscription')->name('subscription');

Route::post('/verify-trans','App\Http\Controllers\paymentController@verifyPayment')->name('verify');
Route::post('/store_payment','App\Http\Controllers\paymentController@store')->name('khalti.storePayment');

Route::get('/register','App\Http\Controllers\RegisterController@index')->name('register');

Route::post('/register/save','App\Http\Controllers\RegisterController@store')->name('register.save');

Route::get('/login','App\Http\Controllers\LoginController@index')->name('login');

Route::post('/login/save','App\Http\Controllers\LoginController@store')->name('login.save');

Route::get('/store','App\Http\Controllers\LogoutController@store')->name('logout');

//Route::get('/horscope','App\Http\Controllers\index@horscope')->name('horscope');
Route::get('/horscope','App\Http\Controllers\index@horscope')->name('horscope');

Route::get('/scheduleDate','App\Http\Controllers\index@scheduleDate')->name('scheduleDate');


Route::post('/store-token','App\Http\Controllers\index@updateDeviceToken')->name('store.token')->middleware(['auth']);

Route::post('/send-web-notifications','App\Http\Controllers\index@sendNotification')->name('send.web-notification')->middleware(['auth']);


 