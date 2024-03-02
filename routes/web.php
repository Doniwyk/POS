<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home']);
Route::prefix('category')->group(function () {
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
});
Route::get('user/{id}/name/{name}', [UserController::class, 'user']);
Route::get('/sales', [SalesController::class, 'sales']);
