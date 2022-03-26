<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Dashboard;

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

Route::get('/',[Homecontroller::class,'show_post'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [Dashboard::class,'show_post'])->name('dashboard');
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
    Route::put('/post/edit/{id}', [PostController::class, 'update'])->name('post_update');
    Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post_destroy');

});


require __DIR__.'/auth.php';
