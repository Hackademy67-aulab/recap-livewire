<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class, 'home'])->name('homePage');

Route::get('/create-album', [AlbumController::class, 'create'])->name('createAlbum');
Route::get('/index-album', [AlbumController::class, 'index'])->name('indexAlbum');
Route::get('/show-album/{album}', [AlbumController::class, 'show'])->name('showAlbum');
Route::get('/edit-album/{album}',[AlbumController::class, 'edit'])->name('editAlbum');
Route::put('/update-album/{album}', [AlbumController::class, 'update'])->name('updateAlbum');
Route::delete('/delete-album/{album}', [AlbumController::class, 'destroy'])->name('deleteAlbum');
