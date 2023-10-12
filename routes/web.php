<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GroomController;
use App\Http\Controllers\BrideController;

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


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/', function () {
    return "WELCOME";
});
Route::middleware('auth')->prefix('/rgpanel')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('rgpanel');
    Route::resource('/users', UserController::class)->names('users');
    Route::resource('/categories', CategoryController::class)->names('categories');
    Route::prefix('/tenants')->as('tenants')->group(function () {
        Route::get('/', [TenantController::class, 'index'])->name('.index');
        Route::get('/create', [TenantController::class, 'create'])->name('.create');
        Route::post('/', [TenantController::class, 'store'])->name('.store');
        Route::get('/{tenant}/edit', [TenantController::class, 'edit'])->name('.edit');
        Route::put('/{tenant}', [TenantController::class, 'update'])->name('.update');
        Route::delete('/{tenant}', [TenantController::class, 'destroy'])->name('.destroy');
        Route::prefix('/{tenant}/grooms')->as('.grooms')->group(function () {
            Route::get('/create', [GroomController::class, 'create'])->name('.create');
            Route::post('/', [GroomController::class, 'store'])->name('.store');
            Route::get('/{groom}/edit', [GroomController::class, 'edit'])->name('.edit');
            Route::put('/{groom}', [GroomController::class, 'update'])->name('.update');
        });
        Route::prefix('/{tenant}/brides')->as('.brides')->group(function () {
            Route::get('/create', [BrideController::class, 'create'])->name('.create');
            Route::post('/', [BrideController::class, 'store'])->name('.store');
            Route::get('/{bride}/edit', [BrideController::class, 'edit'])->name('.edit');
            Route::put('/{bride}', [BrideController::class, 'update'])->name('.update');
        });
    });
});
