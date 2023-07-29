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
Route::get('/products',[ProductController::class, 'index']);
/*Route::post ('/products', function(){
    return Product::Create([
        'name' => 'product one',
        'slug' => 'product-one',
        'description' => 'This is product one',
        'price' => '99.99'



    ]
    );

}); */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
