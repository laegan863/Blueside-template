<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Dashboard Routes
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Profile
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');

    // Forms
    Route::get('/forms', function () {
        return view('admin.forms');
    })->name('admin.forms');

    // UI Components (Component Library)
    Route::get('/ui-components', function () {
        return view('admin.ui-components');
    })->name('admin.ui-components');
});
