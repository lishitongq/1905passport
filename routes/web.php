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

Route::post('/api/auth','User\UserController@auth'); // 鉴权
Route::get('/test/check','TestController@md5test');     //注册
Route::post('/test/check2','TestController@check2'); 	// 签名
