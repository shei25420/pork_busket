<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MenuCategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::get('/csrf_token', [AuthenticationController::class, 'csrf_token']);
    Route::post('/login', [AuthenticationController::class, 'login']);
    Route::post('/register', [AuthenticationController::class, 'register']);
});

Route::prefix('menu_categories')->group(function () {
    Route::get('/', [MenuCategoriesController::class, 'index']);
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::prefix('menu_categories')->group(function () {
        Route::post('/store', [MenuCategoriesController::class, 'store']);
        Route::put('/update/{id}', [MenuCategoriesController::class, 'update']);
        Route::delete('/destroy/{id}', [MenuCategoriesController::class, 'destroy']);
    });
});

Route::get('/', function () {
    return view('welcome');
});
