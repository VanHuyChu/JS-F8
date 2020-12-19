<?php

use Facade\FlareClient\View;
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
    return view('welcome');
});
// hiển thị Cửa sổ pop-up
Route::get('alert', function () {
    return View('bai1.index');
});
// Khai báo biến
Route::get('var', function () {
    return View('bai2.index');
});