<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Gift;
use App\Models\About;


use App\Http\Controllers\CategoriesController;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PaymentController;


use App\Http\Controllers\BlogPostController;


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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/Article', function () {
    return view('user.Article');
})->name('Article');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    $about = About::first(); // Retrieve the first About record from the database

    return view('user.about')->with('about',$about);

})->name('about');
Route::get('/article/{id}', [Article::class, 'show'])->name('single-article');

Auth::routes();
//Delivery

Route::get('/Delivery', function () {
    return view('user.Delivery');
})->name('Delivery');
Route::get('/profile', function () {
    return view('user.Cart');
})->name('profile');

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
Route::any('/Gift/add', function () {

    return view('admin.Gift.Add_Gift');
})->name('Gift.add');
Route::any('/Product/all', function () {
    $categories = Category::all();
    $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
    ->select('products.*', 'categories.category_name as category_name')
    ->get();

    return view('admin.Product.View_all')->with('products', $products);
})->name('Product.View_all');

// gift route
Route::any('/Gift/all', function () {
    $Gifts = Gift::all();

    return view('admin.Gift.View_all')->with('Gifts', $Gifts);
})->name('Gift.View_all');


Route::any('/paymentPage', function () {


    return view('user.visaPayment');
})->name('visaPayment');
Route::get('/Gift/view/{id}', [GiftController::class, 'view'])->name('gift.details');
Route::get('/Gift/edit/{id}', [GiftController::class, 'edit'])->name('gift.edit');
Route::post('/Gift/store', [GiftController::class, 'store'])->name('Gift.store');
Route::post('/Gift/update', [GiftController::class, 'update'])->name('Gift.update');
Route::get('/Gift/delete/{id}', [GiftController::class, 'delete'])->name('gift.delete');


Route::post('/porduct/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/Product/view/{id}', [ProductController::class, 'view'])->name('product.details');
Route::get('/Product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/Product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');


Route::get('orders/get', [AdminOrderController::class, 'getorders'])->name('order.get');
//about us route
Route::get('about/edit', [AboutUsController::class, 'edit'])->name('about.edit');
Route::post('about/update', [AboutUsController::class, 'update'])->name('about.update');


});

Route::middleware(['CheckRole:' . 'admin' . '!' . 'user'])->group(function () {

});

Route::any('/Payment', [PaymentController::class, 'view'])->name('payment.create');

/// user login route
Route::middleware('auth')->group(function () {
    // Protected routes for authenticated users
    Route::post('/cart/add', [CartController::class, 'create'])->name('cart.create');
    Route::post('/cart/gift/add', [CartController::class, 'StoreGift'])->name('cart.gift.create');

    Route::get('/gift', [CartController::class, 'createGift'])->name('gift');
    Route::get('/Allcart', [CartController::class, 'view'])->name('Allcart');

    Route::get('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('delete.cart');
    Route::get('/cart/delete/gift/{id}', [CartController::class, 'deletegift'])->name('delete.gift');
    Route::post('/api/addorder', [OrderController::class, 'create'])->name('order.create');



});

## this is post route



Route::get('/posts', [BlogPostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [BlogPostController::class, 'create'])->name('posts.create')->middleware('admin');

Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store')->middleware('admin');

Route::get('/posts/{id}', [BlogPostController::class, 'show'])->name('posts.show');

Route::get('/posts/{id}/edit', [BlogPostController::class, 'edit'])->name('posts.edit')->middleware('admin');

Route::put('/posts/{id}', [BlogPostController::class, 'update'])->name('posts.update')->middleware('admin');

Route::delete('/posts/{id}', [BlogPostController::class, 'destroy'])->name('posts.destroy')->middleware('admin');
