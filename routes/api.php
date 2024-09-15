<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Route::get('/post', function () {
//     return dd("berhasil post");
// });

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class,'show']);
Route::get('/posts2/{id}', [PostController::class,'show2']);
