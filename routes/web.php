<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('Client/Main_pages/home');
});
Route::get('/menu', function () {
    return view('Client/Main_pages/menu');
});
Route::get('/contact', function () {
    return view('Client/Main_pages/contact');
});
Route::get('/about', function () {
    return view('Client/Main_pages/about');
});
Route::get('/blog', function () {
    return view('Client/Main_pages/blog');
});
Route::get('/blog-single', function () {
    return view('Client/Main_pages/blog-single');
});
Route::get('/services', function () {
    return view('Client/Main_pages/services');
});
Route::get('/detail', function () {
    return view('Client/Main_pages/detail');
});
Route::get('/cart', function () {
    return view('Client/Main_pages/cart');
});
Route::get('/discount', function () {
    return view('Client/Main_pages/discount');
});