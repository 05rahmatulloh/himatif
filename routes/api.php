<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// Route::apiResource('/auth', AuthController::class);


Route::get('/auth',function(){
  echo "ini adalah auth";
});
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/registrasi',[ AuthController::class,'register']);

Route::post('/auth/forgot-password', [AuthController::class, 'forgotPasswordVerifyEmail']);
Route::get('/auth/verify-email/{token}/{email}', [AuthController::class, 'RedirectToResetPaswword']);
Route::post('/auth/reset-password', [AuthController::class, 'resetpassword']);


Route::middleware('auth:sanctum')->post('/auth/logout', [AuthController::class, 'logout']);

Route::post('/tess', [AuthController::class, 'coba']);
