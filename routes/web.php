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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    App()->setlocale("en");
    return view('frontend.index');
})->name('eng');
Route::get('/bn', function () {
    App()->setlocale("bn");
    return view('frontend.index');
})->name('bn');