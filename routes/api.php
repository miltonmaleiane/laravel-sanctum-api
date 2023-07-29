<?php

use GuzzleHttp\Promise\Create;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::resource('products',ProductController::class);
Route::get('/products/search/{name}',[ProductController::class, 'search']);
//Route::get('/products',[ProductController::class, 'index']);
//Route::get('/products/$id',[ProductController::class, 'show']);
//Route::post ('/products', [ProductController::class, 'store']); 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
