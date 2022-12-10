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

Route::get('/', 'App\Http\Controllers\HomeController@welcome')->name('trangchu');

Route::get('/signin', 'App\Http\Controllers\HomeController@signin')->name('dangnhap');

Route::get('/signup', 'App\Http\Controllers\HomeController@signup')->name('dangky');
Route::post('/signup', 'App\Http\Controllers\HomeController@signup_add')->name('dangky');

Route::get('/', 'App\Http\Controllers\ProductController@product')->name('trangchu');

Route::get('/{masp}', 'App\Http\Controllers\ProductController@PrdDetail')->name('chitiet');

Route::get('/buynow/{id}', 'App\Http\Controllers\HomeController@buynow')->name('mua_ngay');
Route::post('/buynow/{id}', 'App\Http\Controllers\HomeController@post_buynow')->name('cap_nhat_db');

Route::get('/cart/view/order/complete', 'App\Http\Controllers\HomeController@complete')->name('thanh_cong');
Route::get('/complete', 'App\Http\Controllers\HomeController@complete')->name('mua_thanh_cong');

Route::get('/cart/view/order', 'App\Http\Controllers\HomeController@order')->name('dat_hang');
Route::post('/cart/view/order', 'App\Http\Controllers\HomeController@post_order')->name('cap_nhat_db');

Route::group(['prefix'=>'cart'],function(){
    Route::get('view', 'App\Http\Controllers\CartController@view')->name('cart_view');
    Route::get('add/{id}', 'App\Http\Controllers\CartController@add')->name('cart_add');
    Route::get('remove/{id}', 'App\Http\Controllers\CartController@remove')->name('cart_remove');
    Route::get('update/{id}/{quantyti}', 'App\Http\Controllers\CartController@update')->name('cart_update');
    Route::get('clear', 'App\Http\Controllers\CartController@clear')->name('cart_clear');
});

Route::group(['prefix'=>'admin','namespace'=>'','middleware'=>'auth'],function(){
    Route::get('/', 'App\Http\Controllers\Admin\AdminController@index')->name('admin');
    Route::get('/logout', 'App\Http\Controllers\Admin\AdminController@logout')->name('logout');
    Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard')->name('dashboard');
    Route::get('/category', 'App\Http\Controllers\Admin\AdminController@category')->name('category');
    Route::get('/productadmin', 'App\Http\Controllers\Admin\AdminController@product')->name('product');
    Route::get('/member', 'App\Http\Controllers\Admin\AdminController@member')->name('member');
});

Route::get('admin/login', 'App\Http\Controllers\Admin\AdminController@login')->name('login');
Route::post('admin/login', 'App\Http\Controllers\Admin\AdminController@post_login')->name('login');
