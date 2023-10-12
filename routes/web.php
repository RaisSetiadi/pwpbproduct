<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HalamanjavaController;
use App\Http\Controllers\HalamanjavascriptController;
use App\Http\Controllers\HalamanlaravelController;
use App\Http\Controllers\HalamanrubyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//route login admin
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post ('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');
//route untuk register admin 
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeradmin',[LoginController::class,'registeradmin'])->name('registeradmin');
//route resource crud data untuk posts
Route::resource('/posts', \App\Http\Controllers\PostController::class);
//route untuk ke halaman utama 
Route::get('/halamanutama',[HomeController::class,'index'])->name('user.index');
Route::get('/RecentPosts/{id}',[DetailController::class,'posts'])->name('user.recentPosts');
//Route Untuk Halaman Admins
Route::get('/halamanAdmin',function(){
    return view('navAdmin');
});
//Route resource crud data untuk laravel 
Route::resource('/laravel', \App\Http\Controllers\LaravelController::class);
//Route resource crud data untuk Java
Route::resource('/java', \App\Http\Controllers\JavaController::class);
//Route resource crud data untuk JavaScript
Route::resource('/javascript', \App\Http\Controllers\JavascriptController::class);
//Route resource crud data untuk Ruby
Route::resource('/ruby', \App\Http\Controllers\RubyController::class);
//route untuk halaman laravel pada user
Route::get('/halamanLaravel',[HalamanlaravelController::class,'index'])->name('user.halamanLaravel');
Route::get('/detailLaravel/{id}',[DetailController::class,'laravel'])->name('user.detailLaravel');
//route untuk halaman java script untuk user 
Route::get('/halamanjavascript',[HalamanjavascriptController::class,'index'])->name('user.halamanjavascript');
Route::get('/detailJavascript/{id}',[DetailController::class,'javascript'])->name('user.detailjavascript');
//route untuk halaman java untuk user 
Route::get('/halamanjava',[HalamanjavaController::class,'index'])->name('user.halamanjava');
Route::get('/detailJava/{id}',[DetailController::class,'java'])->name('user.detailjava');
//route untuk halaman ruby untuk user
Route::get('/halamanRuby',[HalamanrubyController::class,'index'])->name('user.halamanruby');