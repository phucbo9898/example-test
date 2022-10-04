<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\UserController;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\CategoryController;
use App\Http\Controllers\cms\OrderController;
use App\Http\Controllers\cms\ProductController;
use App\Http\Controllers\cms\LoginController;
use App\Http\Controllers\fe\CartController;
use App\Http\Controllers\fe\FilterController;
use App\Http\Controllers\fe\HomeController;
use App\Http\Controllers\fe\LoginFeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//=========================================================================================
// Routing cms
Route::group(['prefix'=>'cms', 'as' => 'cms.'], function(){
    // login cms
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'postLogin'])->name('postLogin');
    // admin dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('checkLoginCMS')->name('dashboard.index');
    // Route::get('dashboard/{lang}',[LocaleController::class, 'setLocale'])->name('change_language');
    Route::get('dashboard/statistic-month', [DashboardController::class, 'statistic_month'])->middleware('checkLoginCMS')->name('dashboard.statistic_month');
    Route::get('dashboard/statistic-year', [DashboardController::class, 'statisticYear'])->middleware('checkLoginCMS')->name('dashboard.statistic_year');
    // Check middleware cho các trang user, product, category, order
    Route::middleware('checkLoginCMS')->group(function() {
        // Function search cho category, user, product, order
        Route::group(['prefix' =>'search', 'as' =>'search.'],function(){
            Route::get('/category', [CategoryController::class, 'search'])->name('category');
            Route::get('/user', [UserController::class, 'search'])->name('user');
            Route::get('/product', [ProductController::class, 'search'])->name('product');
            Route::get('/order', [OrderController::class, 'search'])->name('order');
        });
        Route::resource('user', UserController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);

        // Change status order done - admin cancel - buyer cancel
        Route::get('order/{id}/done', [OrderController::class, 'changeStatusToDone'])->name('order.done');
        Route::post('order/{id}/cancel', [OrderController::class, 'changeStatus'])->name('order.changeStatus');
        Route::get('/order/export-all', [OrderController::class, 'exportAll'])->name('order.export_all');
        // Route::get('/order/export/{id}', [OrderController::class, 'export_status'])->name('order.export_status');
        Route::get('order/{id}/admin-cancel', [OrderController::class, 'changeStatusToAdminCancel'])->name('order.adminCancel');
        Route::resource('order', OrderController::class);

        // Route::resource('brand', BrandController::class);
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});

//=========================================================================================
// Login frontend
Route::get('/login', [LoginFeController::class, 'login'])->name('fe.login');
Route::post('/login', [LoginFeController::class, 'postLogin'])->name('fe.postLogin');

//=========================================================================================
// Routing frontend
Route::get('/', [HomeController::class, 'index'])->name('fe.home');
// Route::get('test-mail',[HomeController::class, 'testEmail']);
Route::group(['prefix'=>'fe', 'as'=>'fe.'], function(){
    Route::get('order-history',[CartController::class, 'orderHistory'])->name('history');
    // Sắp xếp theo price, sold, created_at
    Route::get('search', [FilterController::class, 'search'])->name('search');
    // Filter category
    // Route::get('filter/{id}', [FilterController::class,'filter'])->name('filter');
    // Filter category + sắp xếp
    Route::get('filter/{id}/search', [FilterController::class, 'filterSearch'])->name('filterSearch');

    // Product detail
    Route::get('/product-detail/{id}', [HomeController::class, 'productDetail'])->name('productDetail');
    // Order
    // Route::get('order',[CartController::class,'order'])->name('order');
    Route::post('order',[CartController::class, 'postOrder'])->name('postOrder');
    Route::get('order/{id}/cancel', [CartController::class, 'changeStatus'])->name('order.changeStatus');
    Route::middleware('checkLoginFE')->group(function(){
        Route::get('/logout', [LoginFeController::class, 'logout'])->name('logout');
    });
});
