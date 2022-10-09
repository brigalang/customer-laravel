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
    return view('index');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/myOrders', function () {
    return view('myOrders');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/chat', function () {
    return view('chat');
});
Route::get('/myWallet', function () {
    return view('myWallet');
});
