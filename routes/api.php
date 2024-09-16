<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/post', function () {
//     return dd("berhasil post");
// });
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/posts',[PostController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}', [PostController::class,'show']);
// Route::get('/posts2/{id}', [PostController::class,'show2'])->middleware(['auth:sanctum']);
Route::get('/posts2/{id}', [PostController::class,'show2'])->middleware(['auth:sanctum']);

