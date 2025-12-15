<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'index'])->name('app-index');
Route::get('/search', [AppController::class, 'search'])->name('search');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}', [ShopController::class, 'productDetails'])->name('shop.product.details');
Route::get('/cart-wishlist-count}', [ShopController::class, 'getCartAndWishlistCount'])->name('shop.cart.wishlist.count');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::prefix('wishlist')->name('wishlist.')->group(function () {
    Route::get('/', [WishlistController::class, 'getWishlistedProducts'])->name('list');
    Route::post('/add', [WishlistController::class, 'addProductToWishlist'])->name('store');
    Route::delete('/remove', [WishlistController::class, 'removeProductFromWishlist'])->name('remove');
    Route::delete('/clear', [WishlistController::class, 'clearWishlist'])->name('clear');
    Route::post('move-to-cart', [WishlistController::class, 'moveToCart'])->name('move.to.cart');
});
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/cart/checkout', [CheckoutController::class, 'checkout'])->name('checkout.checkout');
Route::prefix('admin')->group(function () {
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders.index');
    Route::delete('/orders/{id}', [AdminController::class, 'delete_order'])->name('admin.order.delete');
    Route::put('/order/{id}', [AdminController::class, 'update_order'])->name('admin.order.update');
    Route::resource('orders', AdminController::class);
    Route::resource('brands', AdminController::class);
    Route::resource('categories', AdminController::class);
    Route::resource('users', AdminController::class);
    Route::get('/brands', [AdminController::class, 'brands'])->name('admin.brands.index');
    Route::get('/brand/add', [AdminController::class, 'add_brand'])->name('admin.brand.add');
    Route::post('/brand/store', [AdminController::class, 'add_brand_store'])->name('admin.brand.store');
    Route::put('/brand/{id}', [AdminController::class, 'update_brand'])->name('admin.brand.update');
    Route::delete('/admin/brand/{id}/delete', [AdminController::class, 'delete_brand'])->name('admin.brand.delete');
    Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories.index');
    Route::get('/category/add', [AdminController::class, 'add_category'])->name('admin.category.add');
    Route::post('/category/store', [AdminController::class, 'add_category_store'])->name('admin.category.store');
    Route::put('/category/{id}', [AdminController::class, 'update_category'])->name('admin.category.update');
    Route::delete('/admin/category/{id}/delete', [AdminController::class, 'delete_category'])->name('admin.category.delete');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products.index');
    Route::get('/product/add', [AdminController::class, 'add_product'])->name('admin.products.add');
    Route::post('/product/store', [AdminController::class, 'add_product_store'])->name('admin.product.store');
    Route::put('/product/{id}', [AdminController::class, 'update_product'])->name('admin.product.update');
    Route::delete('/admin/product/{id}/delete', [AdminController::class, 'delete_product'])->name('admin.product.delete');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users.index');
    Route::put('/user/{id}', [AdminController::class, 'update_user'])->name('admin.user.update');
    Route::delete('/admin/user/{id}/delete', [AdminController::class, 'delete_user'])->name('admin.user.delete');
});
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
});
Route::middleware('auth', 'auth.admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
