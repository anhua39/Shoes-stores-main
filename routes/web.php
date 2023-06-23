<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\AuthController;

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
// Index
Route::get('/', [frontendController::class, 'index'])->name('index');
// Shop
Route::get('/shop', [frontendController::class, 'shop'])->name('shop');
Route::get('/shopDetail', [frontendController::class, 'shopDetail'])->name('shopDetail');
//Brands
Route::get('addidas', [frontendController::class, 'addidas'])->name('addidas');
Route::get('converse', [frontendController::class, 'converse'])->name('converse');
Route::get('nike', [frontendController::class, 'nike'])->name('nike');
Route::get('supreme', [frontendController::class, 'supreme'])->name('supreme');
Route::get('van', [frontendController::class, 'van'])->name('van');

// Pages
Route::get('aboutUs', [frontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('shoppingCart', [frontendController::class, 'shoppingCart'])->name('shoppingCart');
Route::get('checkOut', [frontendController::class, 'checkOut'])->name('checkOut');
Route::get('blogDetail', [frontendController::class, 'blogDetail'])->name('blogDetail');
// Blog
Route::get('blog', [frontendController::class, 'blog'])->name('blog');
// Contact
Route::get('contact', [frontendController::class, 'contact'])->name('contact');

// Login/ Register
Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('/login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function() {
        return view('dashboard'); 
    })->name('dashboard');

});


