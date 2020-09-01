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
    return view('dashboard');
})->middleware(['auth.shopify'])->name('home');

Route::view('/products', 'product'); //first is the name that is defined in the navbar blade file and the second value is the name from the overall file name ##

Route::view('/customers', 'customer');

Route::view('/settings', 'settings');