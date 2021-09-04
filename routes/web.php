<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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



Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('front.home', [
            "title" => "Home"
        ]);
    });

    Route::get('/about', function () {
        return view('front.about', [
            "title" => "About"
        ]);
    });

    //halaman post
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{post:slug}', [PostController::class, 'show']);
    Route::get('/categories', function () {
        return view('front.blog.categories', [
            'title' => "Post Category",
            'categories'  => Category::all()
        ]);
    });

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});


Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout']);

    Route::resource('/dashboard/posts', DashboardPostController::class);

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'chekSlug']);
});
