<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController as FrontendContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController as FrontendPageController;
use App\Http\Controllers\frontend\PostController as FrontendPostController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group( function(){
    Route::resource('/admin/post', PostController::class);
    Route::resource('/admin/page', PageController::class);
    Route::resource('/admin/category', CategoryController::class)->only('index', 'create', 'store', 'destroy');
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('admin/contact', [ContactController::class, 'index']);
    Route::get('admin/contact', [ContactController::class, 'index']);
    Route::delete('admin/contact/{contact}', [ContactController::class, 'destroy']);
    Route::get('admin/contact/{contact}', [ContactController::class, 'show']);
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index']);
Route::get('post', [FrontendPostController::class, 'index'])->name('post');
Route::get('page', [FrontendPageController::class, 'index'])->name('page');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('contact', [FrontendContactController::class, 'contact'])->name('contact');
Route::post('contact', [FrontendContactController::class, 'store'])->name('contact.store');

