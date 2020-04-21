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
|
*/

Route::get('/', function () {
    return view('home.welcome');
});
Route::get('/brain', 'Brain\BrainController@handle')->name('brain');
Route::get('/physics', 'Physics\PhysicsController@handle')->name('physics');
Route::get('/math', 'Math\MathController@handle')->name('math');

Route::get('/detail/{postsId?}', 'Detail\DetailController@handle')->name('detail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
