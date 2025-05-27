<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\EmployeeDataController;
use App\Models\EmployeeData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/employee-data', [EmployeeDataController::class, 'store']);

