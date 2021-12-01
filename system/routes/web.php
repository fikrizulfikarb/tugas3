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
    return view('frontview.home');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('about', function () {
    return view('frontview.about');
});

Route::get('brand', function () {
    return view('frontview.brand');
});

Route::get('contact', function () {
    return view('frontview.contact');
});

Route::get('client', function () {
    return view('frontview.client');
});

Route::get('login', function () {
    return view('login');
});

Route::get('beranda', function () {
    return view('backview.beranda');
});

Route::get('kategori', function () {
    return view('backview.kategori');
});

Route::get('produk', function () {
    return view('backview.produk');
});

Route::get('user', function () {
    return view('backview.user');
});