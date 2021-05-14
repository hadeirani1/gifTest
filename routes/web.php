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

Auth::routes();

Route::get('/', function () {
    return redirect('/gif');

});

Route::get('/home', function () {
    return redirect('/gif');

});



Route::get('/gif', [App\Http\Controllers\Gif::class, 'index'])->name('gif.index')->middleware('auth');

Route::get('/search', [App\Http\Controllers\Gif::class, 'search'])->name('gif.search')->middleware('auth');