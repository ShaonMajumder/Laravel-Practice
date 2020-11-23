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
/*
Get vs View
route::view('/','home')
route::get('/',function(){
    return view('home');
})
Controller needs get method
*/
Route::get('/','HomeController@home')->name('home');

Route::get('/contact2', 'HomeController@contact')->name('contact');

Route::get('/blog-post/{id}/{welcome?}', 'HomeController@blog_post')->name('blog-post');