<?php

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

Route::get('/', function () {
    return view('welcome');
});

 #Product
 Route::prefix('products')->group(function () {
    Route::get('add', [ProductController::class, 'create']);
    Route::post('add', [ProductController::class, 'store']);
    Route::get('list', [ProductController::class, 'index']);
    Route::get('edit/{product}', [ProductController::class, 'show']);
    Route::post('edit/{product}', [ProductController::class, 'update']);
    Route::DELETE('destroy', [ProductController::class, 'destroy']);
});