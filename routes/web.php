<?php

use Illuminate\Support\Facades\Route;

//Front (Client)
Route::get('lang/{locale}', function($locale){
    if (! in_array($locale,['en', 'vi', 'cn'])){
        abort(404);
    }
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('', [\App\Http\Controllers\Front\HomeConTroller::class, 'index']);
Route::get('contact', [\App\Http\Controllers\Front\HomeConTroller::class, 'contact']);
Route::get('about', [\App\Http\Controllers\Front\HomeConTroller::class, 'about']);
Route::prefix('shop')->group(function (){
    Route::get('product/{id}', [\App\Http\Controllers\Front\ShopController::class, 'show']);
    Route::post('product/{id}', [\App\Http\Controllers\Front\ShopController::class, 'postComment']);
    Route::get('', [\App\Http\Controllers\Front\ShopController::class, 'index']);
    Route::get('category/{categoryName}', [\App\Http\Controllers\Front\ShopController::class, 'category']);
});
Route::prefix('blog')->group(function (){
    Route::get('', [\App\Http\Controllers\Front\BlogController::class, 'index']);
    Route::get('/{id}', [\App\Http\Controllers\Front\BlogController::class, 'show']);
    Route::post('/{id}', [\App\Http\Controllers\Front\BlogController::class, 'postComment']);
});
Route::prefix('cart')->group(function (){
    Route::get('add', [\App\Http\Controllers\Front\CartController::class, 'add']);
    Route::get('delete', [\App\Http\Controllers\Front\CartController::class, 'delete']);
    Route::get('destroy', [\App\Http\Controllers\Front\CartController::class, 'destroy']);
    Route::get('update', [\App\Http\Controllers\Front\CartController::class, 'update']);
    Route::get('/', [\App\Http\Controllers\Front\CartController::class, 'index']);
    /*Route::post('product/{id}', [\App\Http\Controllers\Front\ShopController::class, 'postComment']);
    Route::get('', [\App\Http\Controllers\Front\ShopController::class, 'index']);
    Route::get('category/{categoryName}', [\App\Http\Controllers\Front\ShopController::class, 'category']);*/
});
Route::prefix('checkout')->middleware('CheckMemberLogin')->group(function (){
    Route::get('', [\App\Http\Controllers\Front\CheckOutController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\Front\CheckOutController::class, 'addOrder'])->withoutMiddleware('CheckMemberLogin');
    Route::get('/result', [\App\Http\Controllers\Front\CheckOutController::class, 'result']);
    Route::get('/vnPayCheck', [\App\Http\Controllers\Front\CheckOutController::class, 'vnPayCheck']);
});
Route::prefix('account')->group(function () {
    Route::get('login', [\App\Http\Controllers\Front\AccountController::class, 'login']);
    Route::post('login', [\App\Http\Controllers\Front\AccountController::class, 'checkLogin']);
    Route::get('logout', [\App\Http\Controllers\Front\AccountController::class, 'logout']);
    Route::get('register', [\App\Http\Controllers\Front\AccountController::class, 'register']);
    Route::post('register', [\App\Http\Controllers\Front\AccountController::class, 'postRegister']);
});
Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\AccountController::class, 'myOrderIndex']);
    Route::get('{id}', [\App\Http\Controllers\Front\AccountController::class, 'myOrderShow']);
});

//Dashboard (Admin)
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function (){
    Route::redirect('', 'admin/home');
    Route::get('home', [\App\Http\Controllers\Admin\AdminPageController::class, 'index']);
    Route::resource('user',\App\Http\Controllers\Admin\UserController::class);
    Route::resource('category',\App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('brand',\App\Http\Controllers\Admin\BrandController::class);
    Route::resource('blog',\App\Http\Controllers\Admin\BlogController::class);
    Route::resource('product',\App\Http\Controllers\Admin\ProductController::class);
    Route::resource('product/{product_id}/image',\App\Http\Controllers\Admin\ProductImageController::class);
    Route::resource('product/{product_id}/detail',\App\Http\Controllers\Admin\ProductDetailController::class);
    Route::resource('order',\App\Http\Controllers\Admin\OrderController::class);

    Route::prefix('login')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('/', [\App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });
    Route::get('logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout']);
});
