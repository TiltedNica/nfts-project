<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/homepage', [HomeController::class, 'index'])->name('home');

Route::get('/{user:name}', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/create', [ItemController::class, 'store'])->name('create-item.store');

Route::post('/images', [ImageController::class, 'store'])->name('image.store');




