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
    // return view('welcome');
    return csrf_token();
});

// http://myblog.site/about
// http://localhost/myblog/public/about
Route::get('about', function () {
    return 'About page';
});

// http://myblog.site/user/5
// http://myblog.site/user/samit
Route::get('user/{id?}', function ($id="") {
    return 'User: '.$id;
});

Route::post('product', function () {
    return 'This is my product';
});

Route::put('product', function () {
    return 'Update product';
});

Route::delete('product', function () {
    return 'Delete product';
});
