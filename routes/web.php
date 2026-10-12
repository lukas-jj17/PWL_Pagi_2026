<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

// Products Routes (Plural & Singular aliases)
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('product-new', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::name('product.')->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('index');
    Route::get('product-new', [ProductController::class, 'create'])->name('create');
    Route::post('products', [ProductController::class, 'store'])->name('store');
    Route::get('products/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('products/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

// Suppliers Routes (Plural & Singular aliases)
Route::get('suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('supplier-new', [SupplierController::class, 'create'])->name('suppliers.create');
Route::post('suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
Route::get('suppliers/{id}', [SupplierController::class, 'show'])->name('suppliers.show');
Route::get('suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::put('suppliers/{id}', [SupplierController::class, 'update'])->name('suppliers.update');    
Route::delete('suppliers/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

Route::name('supplier.')->group(function () {
    Route::get('suppliers', [SupplierController::class, 'index'])->name('index');
    Route::get('supplier-new', [SupplierController::class, 'create'])->name('create');
    Route::post('suppliers', [SupplierController::class, 'store'])->name('store');
    Route::get('suppliers/{id}', [SupplierController::class, 'show'])->name('show');
    Route::get('suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('edit');
    Route::put('suppliers/{id}', [SupplierController::class, 'update'])->name('update');
    Route::delete('suppliers/{id}', [SupplierController::class, 'destroy'])->name('destroy');
});

// Transactions Routes
Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('transaction-new', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
Route::get('transactions/{id}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');
Route::put('transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
Route::delete('transactions/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
