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
// Route::get('/', function () {
//     App()->setlocale("en");
//     return view('frontend.index');
// })->name('eng');

// Route::get('/terms&condition', function () {
//     App()->setlocale("en");
//     return view('frontend.terms');
// })->name('eng-terms');

// Route::get('/privacy', function () {
//     App()->setlocale("en");
//     return view('frontend.privacy');
// })->name('eng-privacy');

// Route::get('/', function () {
//     App()->setlocale("en");
//     return view('frontend.index');
// })->name('eng');

// Route::get('/bn', function () {
//     App()->setlocale("bn");
//     return view('frontend.index');
// })->name('bn');

// Route::get('/bn/terms&condition', function () {
//     App()->setlocale("bn");
//     return view('frontend.terms');
// })->name('bn-terms');

// Route::get('/bn/privacy', function () {
//     App()->setlocale("bn");
//     return view('frontend.privacy');
// })->name('bn-privacy');

// Route::get('/',[FrontendController::class, 'index']);
Route::get('/','App\Http\Controllers\FrontendController@index');
Route::get('/privacy','App\Http\Controllers\FrontendController@privacy');
Route::get('/terms','App\Http\Controllers\FrontendController@terms');
Route::get('locale/{locale}','App\Http\Controllers\FrontendController@switch');