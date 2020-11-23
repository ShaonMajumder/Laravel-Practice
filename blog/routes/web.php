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
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::view('/contact', 'contact');

Route::get('/blog-post/{id}', function($id){
    $pages = [
        1=> [
            'tid' => "hello from page 1",
        ],
        2=> [
            'tid' => "hello from page 2",
        ]
    ];
    
    return view('blog-post', ['data' => $pages[$id]]);
});
