<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/article/{slug}', [ArticleController::class, 'show']);
Route::get('/article', [ArticleController::class, 'index']);

Route::resource('post', PostController::class);
Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
