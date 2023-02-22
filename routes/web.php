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
    
Route::get('/messages', 'App\Http\Controllers\MessagesController@index')->name('messages.index');
Route::get('/messages/create', [App\Http\Controllers\MessagesController::class, 'create'])->name('messages.create');
Route::get('/messages/{conversation}', [App\Http\Controllers\MessagesController::class, 'show'])->name('messages.show');
Route::post('/messages', [App\Http\Controllers\MessagesController::class, 'store'])->name('messages.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
