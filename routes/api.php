<?php

use GuzzleHttp\Promise\Create;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//
//rotas publicas
Route::resource('products',ProductController::class);
Route::get('/products/search/{name}',[ProductController::class, 'search']);
Route::get('/products',[ProductController::class, 'index']);
Route::get('/products/$id',[ProductController::class, 'show']);
Route::post ('/register', [AuthController::class, 'register']);
Route::post ('/login', [AuthController::class, 'login']);
;

// rotas protegidas
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post ('/products', [ProductController::class, 'store']);
    Route::put ('/products{id}', [ProductController::class, 'update']);  
    Route::delete ('/products{id}', [ProductController::class, 'destroy']);  
    Route::post ('/logout', [AuthController::class, 'logout']);
});
