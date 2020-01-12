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
// 注册 登录 获取数据
Route::post('/api/user/reg','User\UserController@reg');
Route::post('/api/user/login','User\UserController@login');
Route::get('/api/show/time','User\UserController@showTime');
