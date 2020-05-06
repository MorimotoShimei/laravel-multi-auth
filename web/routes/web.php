<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::namespace('User')->prefix('user')->name('user.')->group(function() {
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false,
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {
        Route::resource('home', 'HomeController', ['only' => 'index']);
    });
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false,
    ]);

    Route::middleware('auth:admin')->group(function () {
        Route:: resource('home', 'HomeController', ['only' => 'index']);
    });
});

Route::get('/', function () {
    return view('welcome');
});
