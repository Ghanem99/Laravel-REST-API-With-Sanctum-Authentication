<?php

use App\Models\Product;
use App\Http\Controllers\ProductController;
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

route::resource('products', ProductController::class);
// route::get('products/search/{name}', [ProductController::class, 'search']);


// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{id}', [ProductController::class, 'show']); 

Route::group(['middleware'=>['auth:sanctum']], function () {
    route::get('products/search/{name}', [ProductController::class, 'search']);
});


