<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/supplier', function () {
    return Supplier::all();
});

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('product-new', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

route::get('suppliers', [SupplierController::class, 'index']);
route::get('supplier-new', [SupplierController::class, 'create']);
route::post('suppliers', [SupplierController::class, 'store']);
route::get('suppliers/{id}', [SupplierController::class, 'show']);
route::get('suppliers/{id}/edit', [SupplierController::class, 'edit']);
route::put('suppliers/{id}', [SupplierController::class, 'update']);    
route::delete('suppliers/{id}', [SupplierController::class, 'destroy']);

route::get('transactions', [TransactionController::class, 'index']);
route::get('transaction-new', [TransactionController::class, 'create']);
route::post('transactions', [TransactionController::class, 'store']);
route::get('transactions/{id}', [TransactionController::class, 'show']);
route::get('transactions/{id}/edit', [TransactionController::class, 'edit']);
route::put('transactions/{id}', [TransactionController::class, 'update']);
route::delete('transactions/{id}', [TransactionController::class, 'destroy']);
