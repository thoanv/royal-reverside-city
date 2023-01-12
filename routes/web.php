<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tin-tuc/{slug}', [HomeController::class, 'show'])->name('post-detail');
Route::get('/post', [HomeController::class, 'post']);
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
//Route::get('/{category_slug?}/{slug?}', [HomeController::class, 'slug'])->name('slug');
