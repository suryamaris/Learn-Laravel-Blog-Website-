<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Surya Maris Panensa",
        "email" => "suryamaris@gmail.com",
        "image" => "foto.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [loginController::class, 'index'])->middleware('guest')->name('login'); 
Route::post('/login', [loginController::class, 'authenticate']); 
Route::post('/logout', [loginController::class, 'logout']); 

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register', [RegisterController::class, 'create']); 

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
