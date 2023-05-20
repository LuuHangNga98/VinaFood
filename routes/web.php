<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
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

// Route Client
Route::get('/', [ClientController::class,'index'])->name('home');

Route::get('/menu', function () {
    return view('Client/Main_pages/menu');
});

Route::get('/login', function () {
    return view('Client/Main_pages/login');
});

Route::get('/regis', function () {
    return view('Client/Main_pages/register');
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
Route::get('/menu', function () {
    return view('Client/Main_pages/menu');
});


// Route Admin
Route::prefix('admin')->group(function(){
    Route::get('', function () {
        return view('Admin/dashboard');
    });
    Route::get('product', function () {
        return view('Admin/product');
    });
    Route::get('category', function () {
        return view('Admin/category');
    });
    Route::get('user', function () {
        return view('Admin/user');
    });
    Route::get('order', function () {
        return view('Admin/order');
    });
    Route::get('discount', function () {
        return view('Admin/discount');
    });
    Route::get('slideshow', function () {
        return view('Admin/slideshow');
    });
    Route::get('blog', function () {
        return view('Admin/blog');
    });
    Route::get('login', [AdminController::class,'login'])->name('login');
    Route::post('login', [AdminController::class,'get_login'])->name('get-login');
    Route::get('logout', [AdminController::class,'logout'])->name('logout');
});
