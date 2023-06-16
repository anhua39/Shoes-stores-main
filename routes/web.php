<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [frontendController::class, 'index'])->name('index');
Route::get('shop', [frontendController::class, 'shop'])->name('shop');
Route::get('blog', [frontendController::class, 'blog'])->name('blog');
Route::get('aboutUs', [frontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('blogDetail', [frontendController::class, 'blogDetail'])->name('blogDetail');