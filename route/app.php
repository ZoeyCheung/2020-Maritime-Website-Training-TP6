<?php
/*
 * @Descripttion: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-06-25 00:05:52
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-26 11:17:38
 */
use think\facade\Route;

Route::pattern(['id' => '\d+']);

Route::rule('/', 'index');

Route::group('goods', function () {
    Route::rule('/', 'index');
    Route::rule(':id', 'detail');
})->prefix('Goods/');

Route::group(function(){
    Route::rule('user$', 'index');
    Route::rule('login', 'login');
    Route::post('check','check');
    Route::rule('logout', 'logout');
    Route::rule('register', 'register');
    Route::post('save','save');
    Route::rule('forgot', 'forgot');
})->prefix('User/');

Route::group('dashboard',function(){
    Route::get('/','index');
    Route::get('/goods','Goods/index');
    Route::delete('/goods/:id','Goods/delete');
    Route::resource('/user','User');
    Route::resource('/profile','Profile');
})->prefix('admin.')->middleware(Auth::class);

