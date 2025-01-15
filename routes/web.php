<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/user/{id}',[UserController::class,'showById']);

Route::get('/login', function () {
    return view('login'); // A simple login form
})->name('login');

Route::post('/login',[UserController::class,'login']);

// Home route (accessible by both admin and employee)
Route::get('/home', function () {
    return view('home');
});

// Admin route (restricted to admins)
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth','is_admin']);

// Employee route (restricted to employees)
Route::get('/employee', [EmployeeController::class, 'index'])
    ->middleware(['auth', 'is_employee']);

