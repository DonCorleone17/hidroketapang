<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\tanamancontroller;
use App\Http\Controllers\sellercontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\homecontroller;

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



Route::prefix('Client')->group(function(){
	//beranda
	Route::get('beranda', [clientcontroller::class, 'showberanda']);
	//ubah
		Route::get('barber', [sellercontroller::class, 'indexseller']);
		Route::get('desc/{barber}', [sellercontroller::class, 'showseller']);
	Route::get('hairstyle', [tanamancontroller::class, 'showtanaman']);

});

Route::prefix('Admin')->group(function(){
	//beranda
	Route::get('beranda', [homecontroller::class, 'showBeranda']);
	//kategori
	Route::resource('tanaman', tanamancontroller::class);
	//produk
	//ubah
		Route::resource('seller', sellercontroller::class);
	Route::post('seller/filter', [sellercontroller::class, 'filter']);
	//hairstyle
	//Route::resource('barber', barbercontroller::class);
	//user 
	Route::resource('user', usercontroller::class);
	//Login_admin
	Route::get('login', [authcontroller::class, 'showLogin'])->name('login');

	Route::post('login', [authcontroller::class, 'LoginProcess']);

	Route::get('register', [authcontroller::class, 'create']);

	Route::post('register', [authcontroller::class, 'register']);

	Route::get('logout', [authcontroller::class, 'destory']);
});