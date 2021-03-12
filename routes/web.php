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

    Route::get('/about', function () {return view('about');});->name('about');
    Route::get('/contact', function () {return view('about');});->name('contact');
    Route::get('/exchange', function () {return view('about');});->name('exchange');
    Route::get('/home', function () {return view('home');});->name('home');
    Route::get('/index', function () {return view('index');});->name('index');
    Route::get('/new', function () {return view('new');});->name('new');
    Route::get('/services', function () {return view('services');});->name('services');
    Route::get('/welcome', function () {return view('welcome');});->name('welcome');

});
