<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\frontendController;

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

Route::get('/', [frontendController::class,'index']);
Route::get('/show', [frontendController::class,'view'])->name('post.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::group(['prefix' => 'admin','middleware'=>['auth','admin']], function () {
//
//    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard');
//    Route::get('blogs', [AdminDashboardController::class,'manageBlog'])->name('admin.manage.blogs');

//    Route::get('post/create',[PostController::class,'create'])->name('post.create');
//    Route::post('store',[PostController::class,'store'])->name('post.store');
//    Route::get('show/{id}',[PostController::class,'show'])->name('post.show');
//    Route::get('edit/{id}',[PostController::class,'edit'])->name('post.edit');
//    Route::post('update/{id}',[PostController::class,'update'])->name('post.update');
//
//    Route::get('update/status/{id}',[AdminDashboardController::class,'changePostStatus'])->name('post.status');
//
//
//});
