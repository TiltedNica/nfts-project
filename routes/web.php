<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CreateCollectionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\RegisterController;
use App\Models\Collection;
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
Route::get('/create-collection', [CollectionController::class, 'index'])->name('create-collection.index');
Route::post('/create-collection', [CollectionController::class, 'store'])->name('create-collection.index');

Route::get('/{user:name}', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/create', [ItemController::class, 'store'])->name('create-item.store');
Route::get('/{user:name}/items/{item}', [ItemController::class, 'show'])->name('items.show');

Route::post('/images', [ImageController::class, 'store'])->name('image.store');




