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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// GITHUB///
Route::get('login/github', 'Auth\LoginController@redirectToGithub')->name('github');
Route::get('login/github/callback', 'Auth\LoginController@handleGithubCallback');




// Google///
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

