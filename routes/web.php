<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CreateCollectionController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LikeCollectionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LikeItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\RegisterController;
use App\Models\Collection;
use App\Models\Item;
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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);

Route::post('logout', [LogoutController::class, 'store'])->name('logout');

Route::get('explore', [ExploreController::class, 'index'])->name('explore.index');

Route::get('/homepage', [HomeController::class, 'index'])->name('home');
Route::get('/create-collection', [CollectionController::class, 'index'])->middleware('auth')->name('create-collection.index');
Route::post('/create-collection', [CollectionController::class, 'store'])->name('create-collection.store');

Route::get('/{user:name}', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create')->middleware('auth');
Route::post('/create', [ItemController::class, 'store'])->name('create-item.store');
Route::get('/{user:name}/items/{item}', [ItemController::class, 'show'])->name('items.show');

Route::post('/images', [ImageController::class, 'store'])->name('image.store');

Route::post('/filter', [ExploreController::class, 'filter'])->name('explore.filter');
//
//Route::post('/items/{item}/likes', [LikeItemController::class, 'store'])->name('items.likes.store');
//Route::post('/items/{item}/likes', [LikeItemController::class, 'like'])->name('items.likes.store');

Route::post('/items/{item}/likes', [ItemController::class, 'like'])->name('items.likes.like');
Route::post('/collection/{collection}/likes', [CollectionController::class, 'like'])->name('collection.likes.like');
//Route::delete('/collection/{collection}/likes', [LikeCollectionController::class, 'destroy'])->name('collection.likes.destroy');


Route::post('/{user:name}/follow', [FollowerController::class,'store'])->name('user.follow');
Route::delete('/{user:name}/unfollow', [FollowerController::class,'destroy'])->name('user.unfollow');


