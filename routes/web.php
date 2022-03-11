<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::view('/about', 'welcome.about');

Route::view('/flowers', 'welcome.flowers');

Route::view('/gifts', 'welcome.gifts');

Route::view('/account', 'welcome.account');

Route::view('/register', 'welcome.register');

Route::view('/prices', 'welcome.prices');

Route::view('/contact', 'welcome.contact');

Route::view('/cart', 'welcome.cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
