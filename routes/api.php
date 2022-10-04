<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\api\SearchController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// API Login
// Route::get('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function() {
    // Route::get('/auth/users', function(Request $request){
    //     return auth()->user();
    // });

    Route::get('/auth/users', [AuthController::class,'index']);

    // API Logout
    Route::post('/auth/logout', [AuthController::class,'logout']);
});

// API products list
Route::apiResource('products', ProductController::class);

// API users list
Route::apiResource('user',UserController::class);

// API filter, search
Route::get('/filter', [SearchController::class,'filter']);
Route::get('/search', [SearchController::class,'search']);

