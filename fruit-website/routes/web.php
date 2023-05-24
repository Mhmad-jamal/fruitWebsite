<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

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

Auth::routes();
Route::get('/Delivery', function () {
    return view('user.Delivery');
})->name('Delivery');

Route::middleware(['CheckRole:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    /* Categories route */
    Route::get('/categories/add', function () {
        return view('admin.Categories.Add_Categories');
        })->name('categories.add');
        


});

Route::middleware(['CheckRole:' . 'admin' . '!' . 'user'])->group(function () {
});
