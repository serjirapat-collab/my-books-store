<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('products.list');
});

Route::controller(ProductController::class)
    ->prefix('/products')
    ->name('products.')
    ->group(function () {
        Route::get('/', 'list')->name('list');
        Route::get('/{product}', 'view')->name('view');
    });

Route::controller(CategoryController::class)
    ->prefix('/categories')
    ->name('categories.')
    ->group(function () {
        Route::get('/', 'list')->name('list');
        Route::get('/{category}', 'view')->name('view');
    });