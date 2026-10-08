<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/review', function () {
    return view('show');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class)->only('index','create','store');
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::get('/', function () { return view('admin.dashboard'); })->name('dashboard');
});
