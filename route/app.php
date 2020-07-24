<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-06-25 00:05:52
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-24 13:38:56
 */
use think\facade\Route;

Route::pattern(['id' => '\d+']);

Route::rule('/', 'index');

Route::group('goods', function () {
    Route::rule('/', 'index');
    Route::rule(':id', 'detail');
})->prefix('Goods/')->middleware(Auth::class);

Route::group(function(){
    Route::rule('user$', 'index');
    Route::rule('login', 'login');
    Route::rule('logout', 'logout');
    Route::rule('register', 'register');
})->prefix('User/');

Route::group('dashboard',function(){
    Route::resource('/','index');
    Route::resource('/goods','Goods');
    Route::resource('/user','User');
})->prefix('admin.');
// ->middleware(Auth::class);

