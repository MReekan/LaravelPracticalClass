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


    Route::get('register', function () {
    return view('register');
    });

    Route::post('/register_post','registercontroller@register_post');



    Route::get('/login', 'logincontroller@login');

    Route::post('/login_post','logincontroller@login_post');

    Route::get('home', 'registercontroller@home');

    Route::get('user_update/{id}', 'usercontroller@user_update');
    Route::post('user_update_post/{id}', 'usercontroller@user_update_post');



