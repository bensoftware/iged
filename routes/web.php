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

Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/diplome', function (){
    return view('diplome.diplome');
});

Route::get('/presentation', function (){
    return view('pages.presentation');
});

Route::get('/test', function (){
    return view('test');
});

Route::get('/', function () {
    return view('index.index');
});

Route::get('/news', function(){
    return view('news.news');
});

Route::get('/about', function(){
    return view('about.about');
});

Route::get('/contact', function(){
    return view('contact.contact');
});
