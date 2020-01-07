<?php


use Illuminate\Auth\Middleware\Authenticate;
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

Route::get('/', 'FormController@populateFormInputs')->middleware('auth');
Route::get('/logout')->middleware('auth');
Auth::routes();
Route::get('/form', 'FormController@populateFormInputs')->middleware('auth');
Route::post('/submitform', 'FormController@submitForm')->middleware('auth');

