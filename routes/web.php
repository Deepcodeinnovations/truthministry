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
    return view('welcome');
});

Route::prefix('/about-us/')->group(function () {
Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('web.history');
Route::get('/mission-&-vision', [App\Http\Controllers\HomeController::class, 'mission'])->name('web.mission');

});


Route::prefix('/ministries/')->group(function () {
Route::get('/evangelism-ministry', [App\Http\Controllers\HomeController::class, 'evangelism'])->name('web.evangelism');
Route::get('/orphanage-ministry', [App\Http\Controllers\HomeController::class, 'orphanage'])->name('web.orphanage');
Route::get('/widows-&-widowers-ministry', [App\Http\Controllers\HomeController::class, 'widows'])->name('web.widows');
Route::get('/praise-&-worship-ministry', [App\Http\Controllers\HomeController::class, 'praise'])->name('web.praise');
Route::get('/childrens-ministry', [App\Http\Controllers\HomeController::class, 'childrens'])->name('web.childrens');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
