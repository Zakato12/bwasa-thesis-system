<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrgyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;

// LOGIN ROUTES
Route::get('/', [PageController::class,'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

// LOGOUT
Route::post('/logout', [AuthController::class,'logout']);

// DASHBOARD
Route::get('/dashboard', [PageController::class,'main']);