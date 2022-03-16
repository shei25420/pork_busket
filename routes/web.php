<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MenuCategoriesController;
use App\Http\Controllers\UsersController;
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

// Route::dommain('management'.config('app.url'))->group(function () {
//     Route::middleware(['auth', 'admin'])->group(function () {
//         Route::prefix('menu_categories')->group(function () {
//             Route::post('/store', [MenuCategoriesController::class, 'store']);
//             Route::put('/update/{id}', [MenuCategoriesController::class, 'update']);
//             Route::delete('/destroy/{id}', [MenuCategoriesController::class, 'destroy']);
//         });
//     });
// });

Route::domain('management.'.config('app.url'))->group(function() {
    Route::prefix('auth')->group(function() {
        Route::get('/csrf_token', [AuthenticationController::class, 'csrf_token']);
        Route::get('/login', fn() => view('welcome'));
        Route::post('/login', [AdminController::class, 'login']);
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/', fn() => "shithrad");
        Route::prefix('menu_categories')->group(function () {
            Route::post('/store', [MenuCategoriesController::class, 'store']);
            Route::put('/update/{id}', [MenuCategoriesController::class, 'update']);
            Route::delete('/destroy/{id}', [MenuCategoriesController::class, 'destroy']);
        });
    });    
});

Route::domain(config('app.url'))->group(function () {
    //Testing Purposes Only
    Route::prefix('auth')->group(function () {
        Route::get('/csrf_token', [AuthenticationController::class, 'csrf_token']);

        Route::post('/register', [UsersController::class, 'register']);
        Route::post('/login', [UsersController::class, 'login']);
        Route::post('/verify', [UsersController::class, 'verify']);
    });

    Route::prefix('menu_categories')->group(function () {
        Route::get('/', [MenuCategoriesController::class, 'index']);
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/', fn() => "sHITHEAD");
    });
});
