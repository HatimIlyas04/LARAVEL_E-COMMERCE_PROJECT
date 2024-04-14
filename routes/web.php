<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\appController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [appController::class , 'index'])->name('app.index');
Route::get('/shop' , [ShopController::class , 'index'])->name('shop.index');
Route::get('/product/{slug}' , [ShopController::class , 'ProductDetails'])->name('shop.product.details');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');





Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/my-acc', [UserController::class , 'index'])->name('user.index');
    Route::get('/admin', [AdminController::class , 'index'])->name('admin.index');

});
// File: routes/web.php

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});







