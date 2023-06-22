<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Article;
use App\Models\Category;
use App\Models\Product;

use App\Http\Controllers\CategoriesController;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CartController;



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

//Store
Route::get('/Store', function () {
    // Retrieve products from the database
    $products = Product::all();

    // Pass the products to the "user.Store" view
    return view('user.Store', ['products' => $products]);
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

            Route::post('/category/update', [CategoriesController::class, 'update'])->name('categories.update');
            
            Route::get('/categories/allCategories', [CategoriesController::class, 'allCategories'])->name('categories.allCategories');
            Route::get('/category/show/{id}', [CategoriesController::class, 'show'])->name('category.show');
            Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');

            Route::any('/category/delete/{id}', [CategoriesController::class, 'delete'])->name('category.delete');
/* end Categories route */


Route::any('/Product/add', function () {
    $categories = Category::all();

    return view('admin.Product.Add_Product')->with('categories', $categories);
})->name('Product.add');
Route::any('/Product/all', function () {
    $categories = Category::all();
    $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
    ->select('products.*', 'categories.category_name as category_name')
    ->get();
    
    return view('admin.Product.View_all')->with('products', $products);
})->name('Product.View_all');

/* Product route */
Route::post('/porduct/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/Product/view/{id}', [ProductController::class, 'view'])->name('product.details');
Route::get('/Product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/Product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');


/*end  Product route */

});

Route::middleware(['CheckRole:' . 'admin' . '!' . 'user'])->group(function () {
});


/// user login route 
Route::middleware('auth')->group(function () {
    // Protected routes for authenticated users
    Route::post('/cart/add', [CartController::class, 'create'])->name('cart.create');
    Route::get('/gift', [CartController::class, 'createGift'])->name('gift');

   

});