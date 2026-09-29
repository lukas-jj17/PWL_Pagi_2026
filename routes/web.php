<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/supplier', function () {
    return Supplier::all();
});

route::get('products', [productController::class, 'index']);
route::get('product-new', [productController::class, 'create']);
route::post('products', [productController::class, 'store']);
route::get('products/{id}', [productController::class, 'show']);
route::get('products/{id}/edit', [productController::class, 'edit']);
route::put('products/{id}', [productController::class, 'update']);
route::delete('products/{id}', [productController::class, 'destroy']);

route::get('suppliers', [supplierController::class, 'index']);
route::get('supplier-new', [supplierController::class, 'create']);
route::post('suppliers', [supplierController::class, 'store']);
route::get('suppliers/{id}', [supplierController::class, 'show']);
route::get('suppliers/{id}/edit', [supplierController::class, 'edit']);
route::put('suppliers/{id}', [supplierController::class, 'update']);    
route::delete('suppliers/{id}', [supplierController::class, 'destroy']);

route::get('transactions', [transactionController::class, 'index']);
route::get('transaction-new', [transactionController::class, 'create']);
route::post('transactions', [transactionController::class, 'store']);
route::get('transactions/{id}', [transactionController::class, 'show']);
route::get('transactions/{id}/edit', [transactionController::class, 'edit']);
route::put('transactions/{id}', [transactionController::class, 'update']);
route::delete('transactions/{id}', [transactionController::class, 'destroy']);
