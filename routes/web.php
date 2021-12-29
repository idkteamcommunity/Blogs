<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'IDK TEAM BLOGS',
        'active' => 'home'
    ]);
});

Route::get('/get67902128data4829category', [MainController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/{post:slug}', [PostController::class, 'show']);
