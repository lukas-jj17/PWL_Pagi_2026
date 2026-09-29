<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/supplier', function () {
    return Supplier::all();
});