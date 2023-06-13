<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Article;


use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Redirect;


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
    return view('user.welcome');
})->name('welcome');
Route::get('/Article', function () {
    return view('user.Article');
})->name('Article');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('user.about');
})->name('about');
Route::get('/article/{id}', [Article::class, 'show'])->name('single-article');

Auth::routes();
//Delivery

Route::get('/Delivery', function () {
    return view('user.Delivery');
})->name('Delivery');
Route::get('/Cart', function () {
    return view('user.Cart');
})->name('Cart');
Route::get('/Allcart', function () {
    return view('user.Allcart');
})->name('Allcart');
Route::get('/Contact', function () {
    return view('user.Contact');
})->name('Contact');
Route::get('/Payment', function () {
    return view('user.Payment');
})->name('Payment');
Route::get('/basket', function () {
    return view('user.basket');
})->name('basket');
Route::get('/gift', function () {
    return view('user.gift');
})->name('gift');
//Store
Route::get('/Store', function () {
    return view('user.Store');
})->name('Store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');


Route::middleware(['CheckRole:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    /* Categories route */
    Route::any('/categories/add', function () {
        return view('admin.Categories.Add_Categories');
        })->name('categories.add');
        Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');

        
            Route::get('/categories/Show', [CategoriesController::class, 'Show'])->name('categories.Show');



});

Route::middleware(['CheckRole:' . 'admin' . '!' . 'user'])->group(function () {
});
