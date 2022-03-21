<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChefsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\WaitersController;
use App\Http\Controllers\AllergensController;
use App\Http\Controllers\MealTimesController;
use App\Http\Controllers\MenuItemsController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\MenuOptionsController;
use App\Http\Controllers\StockOptionsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MenuCategoriesController;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept, X-Requested-With, X-CSRF-TOKEN');
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
Route::domain('management.'.config('app.url'))->group(function() {
    Route::prefix('auth')->group(function() {
        Route::get('/csrf_token', [AuthenticationController::class, 'csrf_token']);
        Route::post('/login', [AdminController::class, 'login']);
    });    

    Route::middleware(['auth:admin'])->group(function () {
        Route::prefix('inventory')->group(function () {
            Route::get('/', [InventoriesController::class, 'index']);
            Route::get('/show/{slug}', [InventoriesController::class, 'show']);
            Route::post('/store', [InventoriesController::class, 'store']);
            Route::put('/update/{id}', [InventoriesController::class, 'update']);
            Route::delete('/destroy/{id}', [InventoriesController::class, 'destroy']);
        });
 
        Route::prefix('stock_options')->group(function () {
            Route::get('/', [StockOptionsController::class, 'index']);
            Route::get('/show/{id}', [StockOptionsController::class, 'show']);
            Route::post('/store', [StockOptionsController::class, 'store']);
            Route::put('/update/{id}', [StockOptionsController::class, 'update']);
            Route::delete('/destroy', [StockOptionsController::class, 'destroy']);
        });

        Route::prefix('stocks')->group(function() {
            Route::get('/', [StocksController::class, 'index']);
            Route::get('/show/{id}', [StocksController::class, 'show']);
            Route::post('/store', [StocksController::class, 'store']);
            Route::post('/add_product', [StocksController::class, 'add_product']);
            Route::post('/remove_product', [StocksController::class, 'remove_product']);
            Route::put('/update/{id}', [StocksController::class, 'update']);
            Route::delete('/destroy/{id}', [StocksController::class, 'destroy']);
        });

        Route::prefix('chefs')->group(function () {
            Route::get('/', [ChefsController::class, 'index']);
            Route::post('/store', [ChefsController::class, 'store']);
            Route::put('/update/{id}', [ChefsController::class, 'update']);
            Route::delete('/destroy/{id}', [ChefsController::class, 'destroy']);
        });

        Route::prefix('waiters')->group(function () {
            Route::get('/', [WaitersController::class, 'index']);
            Route::post('/store', [WaitersController::class, 'store']);
            Route::put('/update/{id}', [WaitersController::class, 'update']);
            Route::delete('/destroy/{id}', [WaitersController::class, 'destroy']);
        });

        Route::prefix('meal_times')->group(function () {
            Route::post('/store', [MealTimesController::class, 'store']);
            Route::put('/update/{id}', [MealTimesController::class, 'update']);
            Route::delete('/destroy/{id}', [MealTimesController::class, 'destroy']);
        });

        Route::prefix('allergens')->group(function () {
            Route::post('/store', [AllergensController::class, 'store']);
            Route::put('/update/{id}', [AllergensController::class, 'update']);
            Route::delete('/destroy/{id}', [AllergensController::class, 'destroy']);
        });

        Route::prefix('menu_options')->group(function () {
            Route::post('/store', [MenuOptionsController::class, 'store']);
            Route::put('/update/{id}', [MenuOptionsController::class, 'update']);
            Route::delete('/destroy/{id}', [MenuOptionsController::class, 'destroy']);
        });

        Route::prefix('menu_categories')->group(function () {
            Route::post('/store', [MenuCategoriesController::class, 'store']);
            Route::put('/update/{id}', [MenuCategoriesController::class, 'update']);
            Route::delete('/destroy/{id}', [MenuCategoriesController::class, 'destroy']);
        });

        Route::prefix('menu_items')->group(function () {
            Route::post('/store', [MenuItemsController::class, 'store']);
            Route::put('/update/{id}', [MenuItemsController::class, 'update']);
            Route::delete('/destroy/{id}', [MenuItemsController::class, 'destroy']);
        });
    });
    Route::get('/{any}', function () {
        return view('welcome');
    })->where('any', '[\/\w\.-]*');
});

Route::domain('waiter.'.config('app.url'))->group(function () {
    Route::middleware(['auth:waiter'])->group(function () {
        
    });
});

Route::domain('chef.'.config('app.url'))->group(function () {
    Route::middleware(['auth:chef'])->group(function () {
        
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

    Route::prefix('meal_times')->group(function() {
        Route::get('/', [MealTimesController::class, 'index']);
        Route::get('/show/{slug}', [MealTimesController::class, 'show']);
    });

    Route::prefix('menu_categories')->group(function () {
        Route::get('/', [MenuCategoriesController::class, 'index']);
        Route::get('/show/{slug}', [MenuCategoriesController::class, 'show']);
    });

    Route::prefix('menu_items')->group(function () {
        Route::get('/', [MenuItemsController::class, 'index']);
        Route::get('/show/{slug}', [MenuCategoriesController::class, 'show']);
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/', fn() => "sHITHEAD");
    });

    Route::get('/{any}', function () {
        return view('welcome');
    })->where('any', '[\/\w\.-]*');
});
