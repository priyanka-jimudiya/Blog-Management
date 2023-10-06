<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return redirect('/post');
});

Route::middleware('throttle:15,2')->group(function(){
    Route::get('/post', [PostController::class,'index'])->name('post.index');
    Route::get('/post/create', [PostController::class,'create'])->name('post.create');
    Route::get('/post/{id}', [PostController::class,'show'])->name('post.show');
    Route::post('/post', [PostController::class,'store'])->name('post.store');
    Route::delete('/post/{id}', [PostController::class,'destroy'])->name('post.destroy');
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::put('post/{id}',[PostController::class,'update'])->name('post.update');
});

